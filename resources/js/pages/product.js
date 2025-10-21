

import { Dropzone } from "dropzone";
import raterJs from 'rater-js';
import noUiSlider from 'nouislider';
import wNumb from 'wnumb';

// Disable auto-discovery
Dropzone.autoDiscover = false;

  // Dropzone
  var dropzonePreviewNode = document.querySelector("#dropzone-preview-list");
  dropzonePreviewNode.id = "";
  if (dropzonePreviewNode) {
    var previewTemplate = dropzonePreviewNode.parentNode.innerHTML;
    dropzonePreviewNode.parentNode.removeChild(dropzonePreviewNode);
    var dropzone = new Dropzone(".dropzone", {
      url: "https://httpbin.org/post",
      method: "post",
      previewTemplate: previewTemplate,
      previewsContainer: "#dropzone-preview",
    });
  }

  const slider = document.getElementById("product-price-range");
if (slider) {

    noUiSlider.create(slider, {
        start: [5, 200], // Handle start position
        step: 1, // Slider moves in increments of '10'
        margin: 0, // Handles must be more than '20' apart
        connect: true, // Display a colored bar between the handles
        behaviour: 'tap-drag', // Move a handle on tap, bar is draggable
        range: { // Slider can select '0' to '100'
            'min': 0,
            'max': 500
        },
        format: wNumb({
            decimals: 0,
            prefix: '$ '
        })

    });

    const minCostInput = document.getElementById("minCost"),
        maxCostInput = document.getElementById("maxCost");

    // When the slider value changes, update the input and span
    slider.noUiSlider.on('update', function (values, handle) {
        if (handle) {
            maxCostInput.value = values[handle];
        } else {
            minCostInput.value = values[handle];
        }
    });

    minCostInput.addEventListener('change', function () {
        slider.noUiSlider.set([null, this.value]);
    });

    maxCostInput.addEventListener('change', function () {
        slider.noUiSlider.set([null, this.value]);
    });
}


// rater-message
var messageDataService = {
    rate: function (rating) {
        return {
            then: function (callback) {
                setTimeout(function () {
                    callback((Math.random() * 5));
                }, 1000);
            }
        }
    }
}

if (document.querySelector('#rater-message'))
    var starRatingmessage = raterJs({
        isBusyText: "Rating in progress. Please wait...",
        starSize: 22,
        element: document.querySelector("#rater-message"),
        rateCallback: function rateCallback(rating, done) {
            starRatingmessage.setRating(rating);
            messageDataService.rate().then(function (avgRating) {
                starRatingmessage.setRating(avgRating);
                done();
            });
        }
    });
