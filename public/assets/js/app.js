// window._ = require('lodash');
// window.$ = window.jQuery = require('jquery');
// require('bootstrap-sass');

// var notifications = []
// import './style.css';
var notifications = []; // Your existing array

// Example: Add a new notification to the end of the array
var newNotification = 'New notification content';
notifications.push(newNotification);

// Now the 'notifications' array contains the new notification
console.log(notifications);


const NOTIFICATION_TYPES = {
    follow: 'App\\Notifications\\AdminNotification'
};


function addNotifications(newNotifications, target) {
    notifications = _.concat(notifications, newNotifications);
    // show only last 5 notifications
    var d = notifications.slice(0, 5);
    console.log(d);
    showNotifications(notifications, target);
}

// function showNotifications(notifications, target) {
//     if(notifications.length) {
//         var htmlElements = notifications.map(function (notification) {
//             return makeNotification(notification);
//         });
//         $(target + 'Menu').html(htmlElements.join(''));
//         $(target).addClass('has-notifications')
//     } else {
//         $(target + 'Menu').html('<li class="dropdown-header">No notifications</li>');
//         $(target).removeClass('has-notifications');
//     }
// }
function makeNotification(notification) {
    var to = routeNotification(notification);
    console.log(to);
    var notificationText = makeNotificationText(notification);
    console.log(notificationText);
    console.log('<li><a href="' + to + '">' + notificationText + '</a></li>');
    return '<li><a href="' + to + '">' + notificationText + '</a></li><hr>';

    // '<li><a href="' + to + '">' + notificationText + '</a></li>'</hr>;
}
function showNotifications(notifications, target) {
    var notificationMenu = $(target + 'Menu');
    if (notifications.length>0) {
        var htmlElements = notifications.map(function (notification) {
            return makeNotification(notification);
        });
        notificationMenu.html(htmlElements.join(''));
        notificationMenu.show(); // Show the notification menu
    } else {
        notificationMenu.html('<li class="dropdown-header">No notifications</li>');
        notificationMenu.hide(); // Hide the notification menu
    }
}



// get the notification route based on it's type
// function routeNotification(notification) {
//     var to = '?read=' + notification.id;
//     if(notification.type === NOTIFICATION_TYPES.follow) {
//         to = 'users' + to;
//     }
//     return '/' + to;
// }

// get the notification text based on it's type
// function makeNotificationText(notification) {
//     var text = '';
//     if(notification.type === NOTIFICATION_TYPES.follow) {
//         const name = notification.data.follower_name;
//         text += '<strong>' + name + '</strong> followed you';
//     }
//     return text;
// }
// const NOTIFICATION_TYPES = {
//     follow: 'App\\Notifications\\AdminNotification',
// };
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
        const name = notification.data.user_name;
        text += `<strong>${name}</strong> followed you`;
        console.log(text);
    } else if(notification.type === NOTIFICATION_TYPES.newPost) {
        const name = notification.data.following_name;
        text += `<strong>${name}</strong> published a post`;
    }
    return text;
}


// window.Pusher = require('pusher-js');
// var Echo = require("/laravel-echo");
// import Echo from "laravel-echo";

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
                addNotifications([notification], '#notification');
            });
    }
});
$(document).ready(function() {
    // check if there's a logged in user
    if(Laravel.userId) {
        $.get('/notifications', function (data) {
            console.log(data);
            addNotifications(data, "#notification");
        });
    }
});
