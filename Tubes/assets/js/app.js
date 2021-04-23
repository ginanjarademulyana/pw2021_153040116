const tl = gsap.timeline();

tl.from(".black", { duration: 1, y: "-100%" })

  .from(".red", { duration: 0.5, y: "-100%" }, "-=0.5")

  .from(".sideBar", { duration: 0.3, x: -200 }, "-=0.2")
  
  .from(
    ".sideBar_js",
    { duration: 1, y: -200, stagger: "0.1", ease: "elastic.out(1, 0.3" },
    "-=0.1"
  )
  .from(".nav_js", { duration: 0.5, y: -200, stagger: "0.1" }, "-=1")

  .from(".image", { duration: 1, x: "100%", ease: "elastic.out(1, 0.3" }, "-=1")
  
  .from(
    ".content1",
    { duration: 0.5, y: 200, stagger: "0.1", opacity: 0 },
    "-=0.6"
  )
  
  .from(
    ".i_js",
    { duration: 0.5, x: 200, stagger: "0.1", opacity: 0 },
    "-=0.6"
  );
