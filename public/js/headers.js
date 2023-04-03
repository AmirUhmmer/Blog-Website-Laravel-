var lastScrollTop = 0;

function getScrollDirection() {
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    var scrollDirection = '';
  
    if (scrollTop > lastScrollTop) {
      scrollDirection = 'down';
    } else if (scrollTop < lastScrollTop) {
      scrollDirection = 'up';
    }
  
    lastScrollTop = scrollTop;
    return scrollDirection;
  }
  
  // attach a scroll event listener to the window object
  window.addEventListener('scroll', function() {
    var scrollDirection = getScrollDirection();
    if (scrollDirection === 'down') {
      document.querySelector('#header').classList.remove('translate-y-0');
      document.querySelector('#header').classList.add('-translate-y-full');
    } else if (scrollDirection === 'up') {
      document.querySelector('#header').classList.add('translate-y-0');
      document.querySelector('#header').classList.remove('-translate-y-full');
    }
  });