
//     }, false);
// }

// expandTextarea('txtarea');





//Check All JS Activation
$();





// Chat Box Reply
/**
 * Generates an auto-reply message.
 *
 * This function generates a dynamically generated auto-reply message.
 * Currently, it returns a placeholder message.
 *
 * @returns {string} The auto-reply message.
 */
function generateAutoReply() {
    // Add your logic here to generate a dynamically generated auto-reply
    // For simplicity, let's just echo a placeholder message
    return `AiWave: I'm a dynamic chat bot!`;
  }

  

  

  

  function createMessageElement(title, message, speechClass, imgSrc, isEditable) {
    const messageElement = document.createElement('div');
    messageElement.className = `chat-box ${speechClass}`;
    messageElement.innerHTML = `
      <div class="inner">
        <div class="chat-section">
          <div class="author">
            <img class="w-100" src="${imgSrc}" alt="${title}">
          </div>
          <div class="chat-content">
            <h6 class="title">${title}</h6>
            <p class="${isEditable ? 'editable' : ''}" ${isEditable ? 'contenteditable="true"' : ''}>${message}</p>
            ${isEditable ? getEditButtons() : getReactionButtons()}
          </div>
        </div>
      </div>
    `;
    return messageElement;
  }

  function getEditButtons() {
    return `
      <div class="edit-actions">
        <button class="edit-btn btn-default btn-small btn-border" onclick="editMessage(this)"><i class="fa-solid fa-pen-to-square"></i></button>
        <button class="save-regenerate-btn btn-default btn-small" onclick="saveAndRegenerateMessage(this)">Save & Regenerate</button>
        <button class="cancel-btn btn-default btn-small btn-border" onclick="cancelEdit(this)">Cancel</button>
      </div>
    `;
  }

  
