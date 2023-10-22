// Installing service worker
const CACHE_NAME = 'wd1-zbierka';

/* Add relative URL of all the static content you want to store in
* cache storage (this will help us use our app offline)*/
let resourcesToCache = [
    '/fonts/fontawesome-free-6.4.2-web/css/all.css',
    '/fonts/fontawesome-free-6.4.2-web/webfonts/fa-brands-400.ttf',
    '/fonts/fontawesome-free-6.4.2-web/webfonts/fa-regular-400.ttf',
    '/fonts/fontawesome-free-6.4.2-web/webfonts/fa-solid-900.ttf',
    '/fonts/fontawesome-free-6.4.2-web/webfonts/fa-v4compatibility.ttf',
    '/fonts/Nunito/static/Nunito-Light.ttf',
    '/css/bootstrap-5.3.2.css',
    '/js/bootstrap-5.3.2.js',
    '/js/jquery-3.7.1.js',
    '/favicon.ico'];

self.addEventListener("install", e => {
    e.waitUntil(
        caches.open(CACHE_NAME).then(cache => {
            return cache.addAll(resourcesToCache);
        })
    );
});

// Cache and return requests
self.addEventListener("fetch", e => {
    e.respondWith(
        caches.match(e.request).then(response => {
            return response || fetch(e.request);
        })
    );
});

// Update a service worker
const cacheWhitelist = ['wd1-zbierka'];
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames.map(cacheName => {
                    if (cacheWhitelist.indexOf(cacheName) === -1) {
                        return caches.delete(cacheName);
                    }
                })
            );
        })
    );
});