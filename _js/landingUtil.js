export default function() {
  let $formContents = $('.form-element');
  let $formLanding = $('.form-landing, .is-form-el');



  let calcHeights = () => {
    $formLanding.css({
      'min-height': $formContents.outerHeight() + 50
    })
  }



  calcHeights();

  let resizeTimeout = null;
  const doResizeTimeout = () => {
    resizeTimeout = setTimeout(() => {
      calcHeights();
    }, 400);
  },
  doResizeHandler = () => {
    if (resizeTimeout !== null) {
    clearTimeout(resizeTimeout);
    }
    doResizeTimeout();
  };

  window.onresize = () => doResizeHandler();


  
}