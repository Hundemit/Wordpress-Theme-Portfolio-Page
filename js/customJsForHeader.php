<script>
  // Header Switch to Top when Scroll down.
  function swtichPositionOfHeader(event) {
    var currentScrollPos = window.pageYOffset;

    var header = document.getElementById("header");
    var body = document.getElementById("body");
    var menu = document.getElementById("menu");

    if (body.offsetWidth > 639) {
      if (window.pageYOffset > 5) {
        header.style.top = "0";
        header.style.paddingTop = "1rem";
        menu.style.top = "1.8rem";
      } else {
        header.style.top = "1rem";
        header.style.paddingTop = "0";
        menu.style.top = "0.8rem";
      }
    } else {
      header.style.top = "0";
      header.style.paddingTop = "0.25rem";
      menu.style.top = "0.25rem";
    }

    this.oldScroll = this.scrollY;
  }
  window.onscroll = (event) => swtichPositionOfHeader(event);
  window.onresize = (event) => swtichPositionOfHeader(event);

  function appHeigh() {
    const doc = document.documentElement;
    document.documentElement.style.setProperty("--app-height", `${window.innerHeight}px`);
  }
  appHeigh();
</script>