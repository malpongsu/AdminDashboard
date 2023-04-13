const checkboxes = document.querySelectorAll('input[type="checkbox"]');
const prices = document.querySelectorAll('.price');

for (let i = 0; i < checkboxes.length; i++) {
  const checkbox = checkboxes[i];
  const price = prices[i];

  checkbox.addEventListener('click', () => {
    if (checkbox.checked) {
      price.textContent = 'Unavailable';
    } else {
      price.textContent = 'Available';
    }
  });
}
