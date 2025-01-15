document.addEventListener('DOMContentLoaded', () => {
    const blocks = document.querySelectorAll('.wp-block-create-block-mission-block');
    blocks.forEach((block) => {
        block.addEventListener('click', () => {
            const textElement = block.querySelector('p');
            if (textElement) {
                textElement.textContent = textElement.textContent.split('').reverse().join('');
            }
        });
    });
});

