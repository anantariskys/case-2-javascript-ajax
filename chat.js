const urlParams = new URLSearchParams(window.location.search);
const username = urlParams.get('username');
const receiver = urlParams.get('send');


function sendMessage(message) {
    $.ajax({
        url: 'Send.php',
        type: 'POST',
        data: { message: message, username: username, receiver: receiver },
        success: function (response) {
            console.log('Message sent successfully');
            $('#messageInput').val('');
        },
        error: function () {
            console.log('Error sending message');
        }
    });
}


function receiveMessages() {
    $.ajax({
        url: 'Get.php',
        type: 'GET',
        data: { username: username, receiver: receiver },
        success: function (data) {
            $('#chat-content').html('');
            const messagesArray = data.split('\n');
      
            messagesArray.pop()
            messagesArray.forEach(function (messageText) {


                const [timestamp, senderReceiver, message] = messageText.split(': ');
           
                const [sender, receiver] = senderReceiver.split(' -> ');

          
                displayMessage(sender, receiver, message,timestamp);
            });



        },
        error: function () {
            console.log('Error receiving messages');
        }
    });
}

function displayMessage(sender, userReceiver, message,timestamp) {
    const chatBubble = $('<div>').addClass('chat-bubble').html(message);
    const chatMessage = $('<div>').addClass('chat');

    console.log(userReceiver===receiver)
    if (sender === username) {
        chatMessage.addClass('chat-end');
        chatBubble.addClass('bg-[#007b8E]');
    } else{
        chatMessage.addClass('chat-start');
    }
    const chatHeader = $('<div>').addClass('chat-header').text(sender+" ");
    const timeElement = $('<time>').addClass('text-xs opacity-50').text(formatTimestamp(timestamp));
    chatHeader.append(timeElement);

  
    chatMessage.append(chatHeader, chatBubble);
    $('#chat-content').append(chatMessage);
}

function formatTimestamp(timestamp) {
    const now = new Date();
    const timeDiff = now - new Date(timestamp);
    const minuteDiff = Math.round(timeDiff / 60000); 

    if (minuteDiff < 1) {
        return 'Just now';
    } else if (minuteDiff === 1) {
        return '1 minute ago';
    } else if (minuteDiff < 60) {
        return `${minuteDiff} minutes ago`;
    } else {
        const hourDiff = Math.round(minuteDiff / 60);
        if (hourDiff === 1) {
            return '1 hour ago';
        } else if (hourDiff < 24) {
            return `${hourDiff} hours ago`;
        } else {
            const dayDiff = Math.round(hourDiff / 24);
            if (dayDiff === 1) {
                return '1 day ago';
            } else {
                return `${dayDiff} days ago`;
            }
        }
    }
}


$('form').submit(function (event) {
    event.preventDefault();
    var message = $('#messageInput').val();
    sendMessage(message);

});


setInterval(receiveMessages, 500);