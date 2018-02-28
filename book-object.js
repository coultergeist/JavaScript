//create an object with literal syntax

var book = {
    //properties
    title: "Mystery on the Blue Train",
    author: "Agatha Cristie",
    checkedOut: 10, 
    availableCopies: 15,
    
    //method
    checkAvaialbeCopies: function(){
        return this.availableCopies - this.checkedOut; 
        }
  
};

//update the html elements
var elTitle = document.getElementById('title');
elTitle.textContent = book.title;

var elAuthor = document.getElementById('author');
elAuthor.textContent = book.author;

var elCopies = document.getElementById('availableCopies');
elCopies.textContent = book.checkAvaialbeCopies();
