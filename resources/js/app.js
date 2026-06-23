document.addEventListener('DOMContentLoaded', function() {
    const chars = document.querySelectorAll('.typewriter .char-wrapper > span');

    let delay = 0;
    chars.forEach((char_wrapper, index) => {
        char_wrapper.style.opacity = '0';
        delay += 0.15; // Increase the delay for each subsequent character
    });

    const startTypewriterEffect = () => {
        setTimeout(() => {
            chars.forEach(char_wrapper => {
                char_wrapper.style.opacity = '1';
                char_wrapper.style.animationDelay = 'unset'; // Reset animation delay
            });
        }, 50); // Delay before starting the typewriter effect
    };

    startTypewriterEffect();
});