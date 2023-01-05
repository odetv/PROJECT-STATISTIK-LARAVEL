import _ from 'lodash';
window._ = _;

import NProgress from 'nprogress'

/**
 * NProgress delay customizations
 */
NProgress.doStart = NProgress.start; NProgress.doDone = NProgress.done; NProgress.clearDelay = function() { if (this.startDelay) { clearTimeout(this.startDelay); this.startDelay = undefined; } }; NProgress.start = function() { this.clearDelay(); this.startDelay = setTimeout(function() { NProgress.doStart(); }, this.settings.delay || 0); }; NProgress.done = function() { this.clearDelay(); this.doDone(); };

NProgress.configure({ showSpinner: false });

document.addEventListener("DOMContentLoaded", () => {
    Livewire.hook('message.sent', () => {
        NProgress.configure({ showSpinner: false, delay: 300 }).start();
    })

    Livewire.hook('message.processed', () => {
        NProgress.done();
    })
});

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

 import axios from 'axios';
 window.axios = axios;
 
 window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });