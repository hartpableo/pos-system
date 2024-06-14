const sizePicker = (counter) => {
  const options = {
    'small': 'Small',
    'medium': 'Medium',
    'large': 'Large',
  };

  // create a label element for the select
  const label = document.createElement('label');
  label.htmlFor = `prod_size_${counter}`;
  label.textContent = `Size ${counter}`;
  label.classList.add(
    'block',
    'text-sm',
    'font-medium',
    'text-gray-700',
    'dark:text-white',
    'mb-2',
  );

  // create a label for the price text input element
  const priceLabel = document.createElement('label');
  priceLabel.htmlFor = `prod_size_price_${counter}`;
  priceLabel.textContent = 'Price';
  priceLabel.classList.add(
    'block',
    'text-sm',
    'font-medium',
    'text-gray-700',
    'dark:text-white',
    'my-2',
  );

  // create a text input element for price of the current size
  const price = document.createElement('input');
  price.type = 'text';
  price.name = 'prod_size_price[]';
  price.id = `prod_size_price_${counter}`;
  price.placeholder = 'Price';
  price.classList.add(
    'bg-gray-50',
    'border',
    'border-gray-300',
    'text-gray-900',
    'text-sm',
    'rounded-lg',
    'focus:ring-blue-500',
    'focus:border-blue-500',
    'block',
    'w-full',
    'p-2.5',
    'dark:bg-gray-700',
    'dark:border-gray-600',
    'dark:placeholder-gray-400',
    'dark:text-white',
    'dark:focus:ring-blue-500',
    'dark:focus:border-blue-500',
  );

  // create a select element
  const select = document.createElement('select');
  select.name = 'prod_size[]';
  select.id = `prod_size_${counter}`;
  select.classList.add(
    'bg-gray-50',
    'border',
    'border-gray-300',
    'text-gray-900',
    'text-sm',
    'rounded-lg',
    'focus:ring-blue-500',
    'focus:border-blue-500',
    'block',
    'w-full',
    'p-2.5',
    'dark:bg-gray-700',
    'dark:border-gray-600',
    'dark:placeholder-gray-400',
    'dark:text-white',
    'dark:focus:ring-blue-500',
    'dark:focus:border-blue-500',
  );

  // create an option element
  const defaultOption = document.createElement('option');
  defaultOption.value = '';
  defaultOption.textContent = 'Select a size';
  select.appendChild(defaultOption);

  // create the options
  for (let key in options) {
    const option = document.createElement('option');
    option.value = key;
    option.textContent = options[key];
    select.appendChild(option);
  }

  // create a div element with class mb-5 containing the label and select
  const div = document.createElement('div');
  div.classList.add('mb-5', 'p-4');
  div.appendChild(label);
  div.appendChild(select);
  div.appendChild(priceLabel);
  div.appendChild(price);

  return div;
}

document.addEventListener('DOMContentLoaded', () => {
  const addSizeBtn = document.querySelector('.add-prod-size');
  const additionalSizesWrapper = document.getElementById('additional-sizes');
  const multiSizeToggle = document.getElementById('has_multiple_sizes');
  const priceFieldWrapper = document.querySelector('.price-field-wrapper');
  const multiSizeHiddenField = document.querySelector('[name="multi_size"]');
  let counter = 1;

  addSizeBtn.addEventListener('click', () => {
    let sizePickerElement = sizePicker(counter);
    additionalSizesWrapper.appendChild(sizePickerElement);
    counter++;
  })

  multiSizeToggle.addEventListener('change', () => {
    if (multiSizeToggle.checked) {
      if (counter === 1) {
        let sizePickerElement = sizePicker(counter);
        additionalSizesWrapper.appendChild(sizePickerElement);
        counter++;
      }
      priceFieldWrapper.classList.add('hidden');
      addSizeBtn.classList.remove('hidden');
      multiSizeHiddenField.value = '1';
    } else {
      priceFieldWrapper.classList.remove('hidden');
      addSizeBtn.classList.add('hidden');
      multiSizeHiddenField.value = '0';
      // remove all inner elements of additionalSizesWrapper
      additionalSizesWrapper.innerHTML = '';
    }
  })
})