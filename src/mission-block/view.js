document.addEventListener('DOMContentLoaded', function () {
    const missionBlocks = document.querySelectorAll('.wp-block-create-block-mission-block.reverse-text-button');

    missionBlocks.forEach((block) => {
        const textElement = block.querySelector('.block-text');

        if (block && textElement) {
            block.addEventListener('click', () => {
                textElement.textContent = textElement.textContent.split('').reverse().join('');
            });
        }
    });
});
