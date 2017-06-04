export function main_send() {
  document.querySelector('#main  input[type="submit"]')
    .addEventListener('click', e => {
      e.preventDefault();

      let data = {
        name: document.querySelector('#main #name_form').value,
        email: document.querySelector('#main #email_form').value,
        telephone: document.querySelector('#main  #tel_form').value
      }

      send_mail(data);
    });
}

export function main_send_2() {
  document.querySelector('#services  input[type="submit"]')
    .addEventListener('click', e => {
      e.preventDefault();

      let data = {
        name: document.querySelector('#services #name_form').value,
        email: document.querySelector('#services #email_form').value,
        telephone: document.querySelector('#services  #tel_form').value
      }

      send_mail(data);
    });
}

export function main_map() {
  document.querySelector('#map_contact input[type="submit"]')
    .addEventListener('click', e => {
      e.preventDefault();

      let data = {
        name: document.querySelector('#map_contact #name_contact input').value,
        telephone: document.querySelector('#map_contact #telephone_contact input').value,
        message: document.querySelector('#map_contact #textarea_contact').value
      }

      send_mail(data);
    });
}

export function main_send_3() {
  document.querySelector('#feedback input[type="submit"]')
    .addEventListener('click', e => {
      e.preventDefault();

      let data = {
        name: document.querySelector('#feedback #name_form').value,
        email: document.querySelector('#feedback #email_form').value,
        telephone: document.querySelector('#feedback  #tel_form').value
      }

      send_mail(data);
    });
}

function send_mail(data) {
  $.post('http://792949.kz/wp-content/themes/shaider/mail.php', data)
    .done( function (value) {
      let mail = document.querySelector('#mail');
      mail.innerHTML = value;
      mail.classList.remove('not_visible_mail');

      setTimeout(function () {
        $('#modal_form_feedback').trigger("reset");
        mail.classList.add('not_visible_mail');
      }, 2000);
    });
}

function send_mail_mes(data) {
  $.post('http://792949.kz/wp-content/themes/shaider/mail_mes.php', data)
    .done( function (value) {
      let mail = document.querySelector('#mail');
      mail.innerHTML = value;
      mail.classList.remove('not_visible_mail');

      setTimeout(function () {
        $('#modal_form_feedback').trigger("reset");
        mail.classList.add('not_visible_mail');
      }, 2000);
    });
}
