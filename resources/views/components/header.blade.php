<!-- Resize screen to see responsive header image, text and arrows! -->

<!-- Check out finished website at: https://scm.ulster.ac.uk/~B00664007/myworkspace/year2/des311/iconswebsite/ -->
<style>

body {
    margin: 0 auto; /* this just resets things so everything is at edge of browser */
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
    background-color: white;
    color: red; 
}

#wrapper {
    margin: 0 auto;
    max-width: 960px;
}

/* ------ Header Section ------ */

.heroimg {
    max-width: 100%;
    width: 100%;
}

.links > a {
    color: red;
    padding: 0 25px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
}


.intro {
    position: absolute;
    text-align: center;
    font-size: 2.2vw; /* responsive text - means 2.2% of viewport width*/
    margin-top: 20%; /* this controls the position of the text - responsive! */
    left: 50%;  
    transform: translate(-50%, -50%);
    color:black;
}

    
}

</style>
<script>;
    if('serviceWorker' in navigator) {
      navigator.serviceWorker
               .register('/serviceworker.js')
               .then(function() { console.log("Service Worker Registered"); });
    }
    </script>
<header>
    
    
    <a href="#landmarkinfo">
    </a>
           
    <img class="heroimg" src="/img/header.jpg">
    
    
</header>