const toggle = document.getElementById('toggle');
const chatbox = document.getElementById('chatbox');
const chatContent = document.getElementById('chat-content');
const chatForm = document.querySelector('form');

toggle.addEventListener('click', () => {
    chatbox.classList.toggle('hidden');
});

