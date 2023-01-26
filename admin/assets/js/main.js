const body = document.querySelector('body'),
    sidebar = body.querySelector('nav'),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box");


toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click", () => {
    sidebar.classList.remove("close");
})

let toolbaroptions = [
    ['bold', 'italic', 'underline', 'strike'],
    ['blockquote', 'code-block']

];

var quill = new Quill('#editor', {
    theme: 'snow',
    modules: {
        toolbar: toolbaroptions
    }
  });