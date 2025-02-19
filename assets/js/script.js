let goodnews = [
    'Good news! You are not alone.',
    'Good news! You are loved.',
    'Good news! You are enough.',
    'Good news! You are worthy.',
    'Good news! You are important.',
    'Good news! You are valued.',
    'Good news! You are appreciated.',
    'Good news! You are needed.',
    'Good news! You are respected.',
    'Good news! You are accepted.',
    'Good news! You are understood.',
    'Good news! You are seen.',
    'Good news! You are heard.',
    'Good news! You are supported.',
    'Good news! You are cared for.',
    'Good news! You are cherished.',
    'Good news! You are celebrated.',
    'Good news! You are encouraged.',
    'Good news! You are inspired.'
]

document.addEventListener('DOMContentLoaded', function() {
    let container = document.querySelectorAll('.wp-goodnews-content');

    if (container) {
        container.forEach(function(item) {
            item.innerHTML = goodnews[Math.floor(Math.random() * goodnews.length)];
        });
    }

    let goodnewsButton = document.querySelectorAll('.wp-goodnews-button');
    if ( goodnewsButton && container ) {
        container.forEach(function(item) {
            item.innerHTML = goodnews[Math.floor(Math.random() * goodnews.length)];
        })
    }
});