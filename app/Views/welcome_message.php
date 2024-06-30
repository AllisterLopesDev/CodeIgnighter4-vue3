<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vue SPA Example</title>
  <!-- Include Vue.js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .active {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div id="app">
    <nav>
      <a href="#" v-on:click.prevent="currentView = 'home'" :class="{ active: currentView === 'home' }">Home</a>
      <a href="#" v-on:click.prevent="currentView = 'about'" :class="{ active: currentView === 'about' }">About</a>
      <a href="#" v-on:click.prevent="currentView = 'contact'" :class="{ active: currentView === 'contact' }">Contact</a>
    </nav>
    <component :is="currentView"></component>
  </div>

  <script>
    // Define your components
    const HomeComponent = {
      template: '<div><h1>Home</h1><p>Welcome to the Home page!</p></div>'
    };

    const AboutComponent = {
      template: '<div><h1>About</h1><p>About us page content.</p></div>'
    };

    const ContactComponent = {
      template: '<div><h1>Contact</h1><p>Contact us page content.</p></div>'
    };

    // Create the Vue instance
    new Vue({
      el: '#app',
      data: {
        currentView: 'home'
      },
      components: {
        home: HomeComponent,
        about: AboutComponent,
        contact: ContactComponent
      }
    });
  </script>
</body>
</html>
