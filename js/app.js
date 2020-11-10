class Note {
    constructor(title, description) {
      this.title = title;
      this.description = description;
    }
  }
  
  class UI {
    
    
      showMessage(message, cssClass) {
        const div = document.createElement('div');
        div.className = `alert alert-${cssClass} mt-4`;
        div.appendChild(document.createTextNode(message));
        //Showing in DOM
        const cont = document.querySelector('.cont');
        const card = document.querySelector('.card-child');
        cont.insertBefore(div, card);
        setTimeout(function(){
            document.querySelector('.alert').remove();
        },3000);
      }
  }
  
  //DOM events
  document
    .getElementById("note-form")
    .addEventListener("submit", function (e) {
      const title = document.getElementById("title").value;
      const description = document.getElementById("description").value;
  
      const ui = new UI();
      if(title == "" || description == ""){
          
            if(title == "" && description == ""){
            message = ui.showMessage('Complete the information correctly into all fields', 'danger');
          }else if(description == ""){
            message = ui.showMessage('Complete the information correctly into Title field', 'danger');
          }else if(title == ""){
            message = ui.showMessage('Complete the information correctly into Description field', 'danger');
          }
         e.preventDefault();
         return message;
      }
     
    });
  
  