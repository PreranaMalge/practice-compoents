document.addEventListener("DOMContentLoaded", () => {
   const tabLinks = document.querySelectorAll(".tab-link");
   const tabContents = document.querySelectorAll(".tab-content");
 
   tabLinks.forEach(link => {
     link.addEventListener("click", () => {
       const target = link.getAttribute("data-tab");
 
       // Remove active from all
       tabLinks.forEach(l => l.classList.remove("active"));
       tabContents.forEach(c => c.classList.remove("active"));
 
       // Add active to clicked
       link.classList.add("active");
       document.getElementById(target).classList.add("active");
     });
   });
 });