<body> 

<div class="progress-bar"></div>
<button class="back-to-top hidden">
  <svg xmlns="http://www.w3.org/2000/svg" class="back-to-top-icon" fill="none" viewBox="0 0 24 24" stroke="white">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
  </svg>
</button>
<div class="progress-bar"></div>

<script>
const showOnPx = 100;
const backToTopButton = document.querySelector(".back-to-top");
const pageProgressBar = document.querySelector(".progress-bar");

const scrollContainer = () => {
  return document.documentElement || document.body;
};

const goToTop = () => {
  document.body.scrollIntoView({
    behavior: "smooth"
  });
};

document.addEventListener("scroll", () => {
  console.log("Scroll Height: ", scrollContainer().scrollHeight);
  console.log("Client Height: ", scrollContainer().clientHeight);

  const scrolledPercentage =
    (scrollContainer().scrollTop /
      (scrollContainer().scrollHeight - scrollContainer().clientHeight)) *
    100;

  pageProgressBar.style.width = `${scrolledPercentage}%`;

  if (scrollContainer().scrollTop > showOnPx) {
    backToTopButton.classList.remove("hidden");
  } else {
    backToTopButton.classList.add("hidden");
  }
});

backToTopButton.addEventListener("click", goToTop);
</script>
<style> 
 .back-to-top {
    position: fixed;
    right: 2rem;
    bottom: 2rem;
    border-radius: 100%;
    background: #006838;
    padding: 0.5rem;
    border: 1px solid white;
    cursor: pointer;
    opacity: 100%;
    transition: opacity 0.5s;
    z-index: 5000;
}

.back-to-top:hover {
    opacity: 60%;
} 

.back-to-top-icon {
    width: 1rem;
    height: 1rem;
    color: #7ac9f9;
}
</style>

</body>