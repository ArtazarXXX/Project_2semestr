var feedbackReview = document.querySelector('.feedback-text__review');
var feedbackInput = document.querySelector('.feedback-form__input');
var buttonSend = document.querySelector('.feedback__button');
var buttonRedact = document.querySelector('.feedback-text-change__unit-redact');
var buttonDelete = document.querySelector('.feedback-text-change__unit-delete');
var blockForReview = document.querySelector('.feedback-text');

var fromInputToReview = function() {
    feedbackReview.textContent = feedbackInput.value;
    feedbackInput.value = '';
}

var fromRedactToReview = function() {
    feedbackInput.value = feedbackReview.textContent;
}

var deleteFromReview = function() {
    feedbackReview.textContent = '';
    feedbackInput.value = '';
}


buttonSend.onclick = function(evt) {
    evt.preventDefault();
    fromInputToReview();
    blockForReview.classList.remove('feedback-text_none');
}

buttonRedact.onclick = function(evt) {
    evt.preventDefault();
    fromRedactToReview();
}

buttonDelete.onclick = function(evt) {
    evt.preventDefault();
    deleteFromReview();
}