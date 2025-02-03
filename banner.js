let bannerIndex = 0;
let banners = document.getElementsByClassName("banner");

function showBanner() {
  for (let i = 0; i < banners.length; i++) {
    banners[i].style.display = "none";
  }
  bannerIndex++;
  if (bannerIndex > banners.length) {bannerIndex = 1}
  banners[bannerIndex-1].style.display = "block";
  setTimeout(showBanner, 3000); // Change banner every 3 seconds
}

showBanner(); // start banner rotation
