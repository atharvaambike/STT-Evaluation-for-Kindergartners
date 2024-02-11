const notesContainer = document.querySelector(".notes-container");
const createBtn = document.querySelector(".btn");
let notes = document.querySelectorAll(".input-box");

function updateStorage() {
    // You have a typo in innerHTML and need to pass a key and value to localStorage.setItem.
    localStorage.setItem("notes", notesContainer.innerHTML);
}

createBtn.addEventListener("click", () => {
    let inputBox = document.createElement("p");
    let img = document.createElement("img");
    inputBox.className = "input-box";
    inputBox.setAttribute("contenteditable", "true");
    img.src = "https://cdn-icons-png.flaticon.com/512/3334/3334328.png";
    // Append the image to the paragraph element and then append the paragraph to the notesContainer.
    inputBox.appendChild(img);
    notesContainer.appendChild(inputBox);
    // Update localStorage when a new note is created.
    updateStorage();
});

notesContainer.addEventListener("click", function (e) {
    if (e.target.tagName === "IMG") {
        e.target.parentElement.remove();
        // Update localStorage when a note is removed.
        updateStorage();
    }
});

// Load notes from localStorage when the page loads.
window.addEventListener("load", () => {
    const storedNotes = localStorage.getItem("notes");
    if (storedNotes) {
        notesContainer.innerHTML = storedNotes;
    }
});