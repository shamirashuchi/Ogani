window._ = require('lodash');
window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');

// var notifications = []
var notifications = []; // Your existing array

// Example: Add a new notification to the end of the array
var newNotification = 'New notification content';
notifications.push(newNotification);

// Now the 'notifications' array contains the new notification
console.log(notifications);


const NOTIFICATION_TYPES = {
    follow: 'App\\Notifications\\AdminNotification'
};
$(document).ready(function() {
    // check if there's a logged in user
    if(Laravel.userId) {
        $.get('/notifications', function (data) {
            addNotifications(data, "#notifications");
        });
    }
});

function addNotifications(newNotifications, target) {
    notifications = _.concat(notifications, newNotifications);
    // show only last 5 notifications
    notifications.slice(0, 5);
    showNotifications(notifications, target);
}
function showNotifications(notifications, target) {
    if(notifications.length) {
        var htmlElements = notifications.map(function (notification) {
            return makeNotification(notification);
        });
        $(target + 'Menu').html(htmlElements.join(''));
        $(target).addClass('has-notifications')
    } else {
        $(target + 'Menu').html('<li class="dropdown-header">No notifications</li>');
        $(target).removeClass('has-notifications');
    }
}
function makeNotification(notification) {
    var to = routeNotification(notification);
    var notificationText = makeNotificationText(notification);
    return '<li><a href="' + to + '">' + notificationText + '</a></li>';
}

// get the notification route based on it's type
function routeNotification(notification) {
    var to = '?read=' + notification.id;
    if(notification.type === NOTIFICATION_TYPES.follow) {
        to = 'users' + to;
    }
    return '/' + to;
}

// get the notification text based on it's type
function makeNotificationText(notification) {
    var text = '';
    if(notification.type === NOTIFICATION_TYPES.follow) {
        const name = notification.data.follower_name;
        text += '<strong>' + name + '</strong> followed you';
    }
    return text;
}
const NOTIFICATION_TYPES = {
    follow: 'App\\Notifications\\AdminNotification',
};
//...
function routeNotification(notification) {
    var to = `?read=${notification.id}`;
    if(notification.type === NOTIFICATION_TYPES.follow) {
        to = 'users' + to;
    } else if(notification.type === NOTIFICATION_TYPES.newPost) {
        const postId = notification.data.post_id;
        to = `posts/${postId}` + to;
    }
    return '/' + to;
}

function makeNotificationText(notification) {
    var text = '';
    if(notification.type === NOTIFICATION_TYPES.follow) {
        const name = notification.data.follower_name;
        text += `<strong>${name}</strong> followed you`;
    } else if(notification.type === NOTIFICATION_TYPES.newPost) {
        const name = notification.data.following_name;
        text += `<strong>${name}</strong> published a post`;
    }
    return text;
}
window.Pusher = require('pusher-js');
import Echo from "laravel-echo";

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '40cf14d763781951f385',
    cluster: 'eu',
    encrypted: true
});

var notifications = [];

//...

$(document).ready(function() {
    if(Laravel.userId) {
        //...
        window.Echo.private(`App.User.${Laravel.userId}`)
            .notification((notification) => {
                addNotifications([notification], '#notifications');
            });
    }
});
