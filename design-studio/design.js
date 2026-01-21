const priceRange = document.getElementById("priceRange");
const rangeVal = document.getElementById("rangeVal");

if (priceRange && rangeVal) {
  rangeVal.textContent = priceRange.value;
  priceRange.addEventListener("input", () => {
    rangeVal.textContent = priceRange.value;
  });
}
