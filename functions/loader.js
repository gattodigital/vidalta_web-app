// Load content & plugins
async function loadContent(targetClass, contentPath) {
  fetch(contentPath)
    .then(response => response.text())
    .then(data => {
      const elements = document.querySelectorAll('.' + targetClass);
      elements.forEach(element => {
        element.innerHTML = data;

        // Check if the content has the datepicker elements
        const dateRangeElement = element.querySelector('#dateRange');

        if (dateRangeElement) {
          new Litepicker({
            element: dateRangeElement,
            singleMode: false, // Keep this as false to allow range mode
            format: 'MM/DD/YYYY' // Your desired format
          });
        }

        // Add this right after injecting the new content
        smartTruncate('.smart-truncate', 3);
      });
    });
}

// Load header and footer
loadContent('app-header', 'components/header/app-header.html');
loadContent('app-footer', 'components/footer/app-footer.html');

// Initial content load
determineTemplate();

// Load template
function determineTemplate() {
  let templateName = 'home'; // default to home

  if (window.location.hash === '#product-listing') {
    templateName = 'product-listing';
  } else if (window.location.hash === '#product-detail') {
    templateName = 'product-detail';
  } else if (window.location.hash === '#about-us') {
    templateName = 'about';
  } else if (window.location.hash === '#faqs') {
    templateName = 'faqs';
  } else if (window.location.hash === '#contact-us') {
    templateName = 'contact';
  } else if (window.location.hash === '#travel-guide') {
    templateName = 'travel-guide';
  } else if (window.location.hash === '#sitemap') {
    templateName = 'sitemap';
  } else if (window.location.hash === '#privacy-policy') {
    templateName = 'privacy-policy';
  } else if (window.location.hash === '#terms-and-conditions') {
    templateName = 'terms-and-conditions';
  } else if (window.location.hash === '#design-system') {
    return loadContent('app-content', 'design-system');
  }
  loadContent('app-content', `templates/${templateName}.html`);
}

// Add an event listener to handle URL hash changes
window.addEventListener('hashchange', determineTemplate);

