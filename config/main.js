function openNav() {
    document.getElementById("navside").style.width = "280px";
    document.getElementsByClassName("main").style.marginLeft = "250px";
  }
  
  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("navside").style.width = "0";
    document.getElementsByclassName("main").style.marginLeft = "0";
  }