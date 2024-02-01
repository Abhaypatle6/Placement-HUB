<!doctype html>
<html x-data="{colorMode: localStorage.getItem('colorMode') || localStorage.setItem('colorMode', 'light')}" x-init="$watch('colorMode', val => localStorage.setItem('colorMode', val))" x-bind:class="{'dark': colorMode === 'dark' || (colorMode === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)}" class="scroll-smooth h-full overflow-y-auto">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- The Play CDN is designed for development purposes only, and is not the best choice for production. -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link id="heading-font" rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700;800;900&display=swap" media="all" />
  <style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "DM Sans", ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }
  </style>
  <script>
    window.tailwind.config = {
      "darkMode": "class",
      "theme": {
        "fontFamily": {
          "heading": ["DM Sans", "ui-sans-serif", "system-ui", "-apple-system", "BlinkMacSystemFont", "\"Segoe UI\"", "Roboto", "\"Helvetica Neue\"", "Arial", "\"Noto Sans\"", "sans-serif", "\"Apple Color Emoji\"", "\"Segoe UI Emoji\"", "\"Segoe UI Symbol\"", "\"Noto Color Emoji\""],
          "body": ["DM Sans", "ui-sans-serif", "system-ui", "-apple-system", "BlinkMacSystemFont", "\"Segoe UI\"", "Roboto", "\"Helvetica Neue\"", "Arial", "\"Noto Sans\"", "sans-serif", "\"Apple Color Emoji\"", "\"Segoe UI Emoji\"", "\"Segoe UI Symbol\"", "\"Noto Color Emoji\""]
        },
        "extend": {
          "borderRadius": {
            "global": "5px"
          },
          "colors": {
            "primary": {
              "50": "#f8f5ff",
              "100": "#eee6fe",
              "200": "#ddcefd",
              "300": "#c1a6fc",
              "400": "#844df9",
              "500": "#4d07e4",
              "600": "#3705a3",
              "700": "#280477",
              "800": "#170245",
              "900": "#0c0123",
              "950": "#070114",
              "DEFAULT": "#570df8"
            },
            "secondary": {
              "50": "#fff5fd",
              "100": "#ffe6f9",
              "200": "#fecdf3",
              "300": "#fea4e9",
              "400": "#fd49d3",
              "500": "#e802b3",
              "600": "#a70280",
              "700": "#79015d",
              "800": "#470136",
              "900": "#23001b",
              "950": "#140010",
              "DEFAULT": "#f002b8"
            }
          }
        }
      },
      "plugins": [window.tailwind.plugin.withOptions(({
        prefix = "ui"
      } = {}) => {
        return ({
          addVariant
        }) => {
          for (let state of ["open", "checked", "selected", "active", "disabled"]) {
            addVariant(`${prefix}-${state}`, [
              `&[data-headlessui-state~="${state}"]`,
              `:where([data-headlessui-state~="${state}"]) &`,
            ]);

            addVariant(`${prefix}-not-${state}`, [
              `&[data-headlessui-state]:not([data-headlessui-state~="${state}"])`,
              `:where([data-headlessui-state]:not([data-headlessui-state~="${state}"])) &:not([data-headlessui-state])`,
            ]);
          }
        };
      }), ]
    };
  </script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>

<body x-data="{'openDialogId': ''}" x-on:keydown.escape="openDialogId=''" class='font-body antialiased h-full font-body antialiased text-[#000000] bg-[#fcfcfc] dark:text-[#ffffff] dark:bg-[#031022]'>
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
      <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Meet the crew</h2>
      <p class="mt-1 text-gray-600 dark:text-gray-400">Creative people</p>
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-3 gap-12">
      <div class="grid sm:flex sm:items-center gap-y-3 gap-x-4"><img class="rounded-lg w-20 h-20" alt="No alt" src="star.jpg" />
        <div class="sm:flex sm:flex-col sm:h-full">
          <div class="">
            <h3 class="font-medium text-gray-800 dark:text-gray-200">Abhay Patle</h3>
            <p class="mt-1 text-xs uppercase text-gray-500">Full Stack Web Developer</p>
          </div>
          <div class="mt-2 sm:mt-auto space-x-2.5"><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="https://www.linkedin.com/in/abhay-patle-043694235"><span class="w-3.5 h-3.5"><i class="fa fa-linkedin-square" style="font-size:24px"></i></span></a><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="https://github.com/Abhaypatle6"><span class="w-3.5 h-3.5"><i class="fa fa-github" style="font-size:24px"></i></span></a></div>
        </div>
      </div>
      <div class="grid sm:flex sm:items-center gap-y-3 gap-x-4"><img class="rounded-lg w-20 h-20" alt="No alt" src="star.jpg" />
        <div class="sm:flex sm:flex-col sm:h-full">
          <div class="">
            <h3 class="font-medium text-gray-800 dark:text-gray-200">Sajeed Khan</h3>
            <p class="mt-1 text-xs uppercase text-gray-500">Full Stack Web Developer</p>
          </div>
          <div class="mt-2 sm:mt-auto space-x-2.5"><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="https://www.linkedin.com/in/sajeed-khan-685305732819810221"><span class="w-3.5 h-3.5"><i class="fa fa-linkedin-square" style="font-size:24px"></i></span></a><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="https://github.com/ASKgreat03"><span class="w-3.5 h-3.5"><i class="fa fa-github" style="font-size:24px"></i></span></a></div>

        </div>
      </div>
      <div class="grid sm:flex sm:items-center gap-y-3 gap-x-4"><img class="rounded-lg w-20 h-20" alt="No alt" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=900&amp;h=900&amp;q=80" />
        <div class="sm:flex sm:flex-col sm:h-full">
          <div class="">
            <h3 class="font-medium text-gray-800 dark:text-gray-200">Sadiya Abdul Salim</h3>
            <p class="mt-1 text-xs uppercase text-gray-500">Full Stack Web Developer</p>
          </div>
          <div class="mt-2 sm:mt-auto space-x-2.5"><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="https://www.linkedin.com/in/sajeed-khan-685305732819810221"><span class="w-3.5 h-3.5"><i class="fa fa-linkedin-square" style="font-size:24px"></i></span></a><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="#"><span class="w-3.5 h-3.5"><i class="fa fa-github" style="font-size:24px"></i></span></a></div>

        </div>
      </div>
      <div class="grid sm:flex sm:items-center gap-y-3 gap-x-4"><img class="rounded-lg w-20 h-20" alt="No alt" src="star.jpg" />
        <div class="sm:flex sm:flex-col sm:h-full">
          <div class="">
            <h3 class="font-medium text-gray-800 dark:text-gray-200">Yash Ingle</h3>
            <p class="mt-1 text-xs uppercase text-gray-500">Front-end Web Developer</p>
          </div>
          <div class="mt-2 sm:mt-auto space-x-2.5"><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="https://www.linkedin.com/in/sajeed-khan-685305732819810221"><span class="w-3.5 h-3.5"><i class="fa fa-linkedin-square" style="font-size:24px"></i></span></a><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="#"><span class="w-3.5 h-3.5"><i class="fa fa-github" style="font-size:24px"></i></span></a></div>

        </div>
      </div>
      <div class="grid sm:flex sm:items-center gap-y-3 gap-x-4"><img class="rounded-lg w-20 h-20" alt="No alt" src="star.jpg" />
        <div class="sm:flex sm:flex-col sm:h-full">
          <div class="">
            <h3 class="font-medium text-gray-800 dark:text-gray-200">Pratik Zade</h3>
            <p class="mt-1 text-xs uppercase text-gray-500">Front-end Web Developer</p>
          </div>
          <div class="mt-2 sm:mt-auto space-x-2.5"><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="https://www.linkedin.com/in/pratik-zade-779a6b253"><span class="w-3.5 h-3.5"><i class="fa fa-linkedin-square" style="font-size:24px"></i></span></a><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="https://github.com/PratikZade12"><span class="w-3.5 h-3.5"><i class="fa fa-github" style="font-size:24px"></i></span></a></div>

        </div>
      </div>
      <div class="grid sm:flex sm:items-center gap-y-3 gap-x-4"><img class="rounded-lg w-20 h-20" alt="No alt" src="star.jpg" />
        <div class="sm:flex sm:flex-col sm:h-full">
          <div class="">
            <h3 class="font-medium text-gray-800 dark:text-gray-200">Uday Fating</h3>
            <p class="mt-1 text-xs uppercase text-gray-500">Front-end Web Developer</p>
          </div>
          <div class="mt-2 sm:mt-auto space-x-2.5"><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="https://www.linkedin.com/in/uday-fating-652486238/"><span class="w-3.5 h-3.5"><i class="fa fa-linkedin-square" style="font-size:24px"></i></span></a><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="https://github.com/Uday-Fating"><span class="w-3.5 h-3.5"><i class="fa fa-github" style="font-size:24px"></i></span></a></div>

        </div>
      </div>
    </div>
  </div>
  
  <script defer src="https://unpkg.com/alpinejs@3.9.0/dist/cdn.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 50,
      duration: 800
    });
  </script>


</body>

</html>