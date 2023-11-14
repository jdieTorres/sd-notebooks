import { initializeApp } from "https://www.gstatic.com/firebasejs/10.5.2/firebase-app.js";
import { getFirestore, collection, getDocs, deleteDoc, doc, updateDoc} from "https://www.gstatic.com/firebasejs/10.5.2/firebase-firestore.js"

const uid = sessionStorage.getItem('uid');

const firebaseConfig = {
    apiKey: "AIzaSyDdzu88Yc2hFkOBK0BrcvSGX-4yDbAs8R0",
    authDomain: "sd-notebooks-6e2a8.firebaseapp.com",
    projectId: "sd-notebooks-6e2a8",
    storageBucket: "sd-notebooks-6e2a8.appspot.com",
    messagingSenderId: "58677219226",
    appId: "1:58677219226:web:457132eb82f664bfa63423"
};

const app = initializeApp(firebaseConfig);
export const FirebaseDB = getFirestore(app);

const loadNotes = async (uid = '') => {

    const collectionRef = collection(FirebaseDB, `${uid}/journal/notes`);
    const docs = await getDocs(collectionRef);

    const notes = [];
    docs.forEach(doc => {
        notes.push({ id: doc.id, ...doc.data() });
    });

    return notes

};

const notes = await loadNotes(uid);

const deleteNote = async (uid, noteId) => {
    await deleteDoc(doc(collection(FirebaseDB, `${uid}/journal/notes`), noteId));
    const updatedNotes = await loadNotes(uid);
    updateNotesList(updatedNotes);
};

const updateNote = async (uid, noteId, updatedData) => {
    await updateDoc(doc(collection(FirebaseDB, `${uid}/journal/notes`), noteId), updatedData); 
    const updatedNotes = await loadNotes(uid);
    updateNotesList(updatedNotes);
};


const renderNotes = (notes) => {
    document.getElementById("notesList").innerHTML = "";
    notes.forEach(note => {
        const noteItem = document.createElement("li");
        noteItem.className = "notes-list-item";
    
        const noteIcon = document.createElement("i");
        noteIcon.className = "fa-regular fa-bookmark";
    
        const noteTitle = document.createElement("h4");
        noteTitle.textContent = note.title;
    
        const noteBody = document.createElement("p");
        noteBody.textContent = note.body;
    
        const deleteButton = document.createElement("button");
        
        deleteButton.innerHTML = '<i class="fa-regular fa-trash-can fa-2xl" style="color: #00fffb;"></i>';
        deleteButton.style.background = "none";
        deleteButton.style.border = "none";
        deleteButton.style.padding = "0";
        deleteButton.style.cursor = "pointer";

        deleteButton.addEventListener("click", () => {
            deleteNote(uid, note.id);
        });


            const updateButton = document.createElement("button");
        updateButton.innerHTML = '<i class="fa-regular fa-pen-to-square fa-2xl" style="color: #00fffb;"></i>';
        updateButton.style.background = "none";
        updateButton.style.border = "none";
        updateButton.style.padding = "0";
        updateButton.style.cursor = "pointer";

        updateButton.addEventListener("click", () => {
        const modal = document.getElementById("updateModal");
        const updatedTitleInput = document.getElementById("updatedTitle");
        const updatedBodyInput = document.getElementById("updatedBody");

        updatedTitleInput.value = note.title;
        updatedBodyInput.value = note.body;

        modal.style.display = "block";
    
        const saveChangesButton = document.getElementById("saveChanges");
        saveChangesButton.addEventListener("click", () => {
            const updatedTitle = document.getElementById("updatedTitle").value;
            const updatedBody = document.getElementById("updatedBody").value;
        
            if (updatedTitle.trim() !== "" && updatedBody.trim() !== "") {
                updateNote(uid, note.id, { title: updatedTitle, body: updatedBody });
                const modal = document.getElementById("updateModal");
                modal.style.display = "none";
            } else {
                alert("Por favor, complete todos los campos.");
            }
        });
        });
        
    
        noteItem.appendChild(noteIcon);
        noteItem.appendChild(noteTitle);
        noteItem.appendChild(noteBody);
        noteItem.appendChild(deleteButton);
        noteItem.appendChild(updateButton);
    
        document.getElementById("notesList").appendChild(noteItem);
    });
};


const updateNotesList = (updatedNotes) => {
    renderNotes(updatedNotes);
};

renderNotes(notes);

const closeModalButton = document.getElementById("closeModal");

closeModalButton.addEventListener("click", () => {
    const modal = document.getElementById("updateModal");
    modal.style.display = "none";
});

window.addEventListener("click", (event) => {
    const modal = document.getElementById("updateModal");
    if (event.target === modal) {
        modal.style.display = "none";
    }
});



/*notes.forEach(note => {

    const listItem = document.createElement("li");
    listItem.className = "notes-list-item";

    // Crea elementos HTML para el título y el cuerpo de la nota
    const titleElement = document.createElement("h4");
    titleElement.textContent = note.title;

    const bodyElement = document.createElement("p");
    bodyElement.textContent = note.body;

    // Agrega los elementos al <li> y luego agrega el <li> a la lista
    listItem.appendChild(titleElement);
    listItem.appendChild(bodyElement);

    // Agrega el <li> a la lista
    document.querySelector(".notes-list").appendChild(listItem);
});*/