// affiliate-dynamic-group.js
// Fetches affiliate product data and renders a dynamic card group

function buildAffiliateDynamicGroup(containerId, dataPath) {
  const container = document.getElementById(containerId);
  if (!container) return;

  fetch(dataPath)
    .then(function (response) {
      if (!response.ok) throw new Error('Failed to load affiliate data');
      return response.json();
    })
    .then(function (affiliates) {
      container.innerHTML = buildAffiliateGroupHTML(affiliates);
    })
    .catch(function (error) {
      console.error('affiliate-dynamic-group:', error);
    });
}

function buildAffiliateGroupHTML(affiliates) {
  var cards = affiliates
    .map(function (item) {
      return buildAffiliateCardHTML(item);
    })
    .join('');

  return '<div class="row">' + cards + '</div>';
}

function buildAffiliateCardHTML(item) {
  var stars = buildStarsHTML(item.rating);

  return (
    '<div class="col-12 col-sm-6 col-lg-3 mb-4">' +
    '  <div class="product-card product-card_grid">' +
    '    <div class="row g-0">' +
    '      <div class="card-image cropped-img">' +
    '        <div class="img-wrapper">' +
    '          <img src="' + item.image + '" class="img-object" alt="' + item.title + '" />' +
    '        </div>' +
    '      </div>' +
    '      <div class="card-data">' +
    '        <div class="card-data_body">' +
    '          <a href="' + item.affiliate_url + '" class="product-card_link stretched-link" rel="noopener sponsored">' +
    '            <h3 class="product-title">' + item.title + '</h3>' +
    '          </a>' +
    '          <div class="product-location">' +
    '            <div class="icon-note icon-note_sm">' +
    '              <i class="material-symbols-outlined">location_on</i>' +
    '              ' + item.location +
    '            </div>' +
    '          </div>' +
    '        </div>' +
    '        <div class="card-data_action mt-2">' +
    '          <div class="product-rating">' +
    '            <div class="rating-stars">' + stars + '</div>' +
    '          </div>' +
    '          <div class="product-price">' +
    '            <span class="currency">$</span>' + item.price.toFixed(2) +
    '            <span class="support-text">night</span>' +
    '          </div>' +
    '          <div class="affiliate-badge">' +
    '            <small class="text-muted">via ' + item.affiliate_partner + '</small>' +
    '          </div>' +
    '        </div>' +
    '      </div>' +
    '    </div>' +
    '  </div>' +
    '</div>'
  );
}

function buildStarsHTML(rating) {
  var stars = '';
  for (var i = 1; i <= 5; i++) {
    stars += '<i class="material-symbols-outlined"' + (i <= rating ? ' style="font-variation-settings:\'FILL\' 1"' : '') + '>grade</i>';
  }
  return stars;
}
