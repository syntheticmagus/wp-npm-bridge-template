// This functionality is inline, so it will be automatically run on any page
// where our WordPress plugin enqueues our Webpack build artifact.
console.log("Hello, WordPress! It's JavaScript!");

// This functionality is also inline, so it will also run whenever our JS is
// enqueued, but all it does is save off a function to be used later. This
// is the function that is called by our [npm-bridge ...] shortcode.
window.CustomFunction = function () {
    // Because the [npm-bridge ...] shortcode defined in wp-npm-bridge-template.php
    // invokes this function, this functionality will be run only at times and 
    // in places where the shortcode itself is invoked.
    console.log("Hello again, WordPress! You called?");
};
