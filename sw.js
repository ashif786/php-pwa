 //this will show only one time in the browser thne even if u refresh it wont show 
 self.addEventListener('install', e => {
    e.waitUntill(
      caches.open("static").then(cache => {
          return cache.addAll(["./","./img/icons/192.png"]);
      })  
    );
  });

self.addEventListener("fetch", e=>{
    //   console.log('intercepting fetch request for:  ${e.request.url}');
    e.respondWith(
        caches.match(e.request).then(response => {
            return response || fetch(e.request);
        })
    );
  });