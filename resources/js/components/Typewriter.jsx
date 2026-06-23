import React, { useEffect } from 'react';

const TypewriterEffect: React.FC<{ text: string }> = ({ text }) => {
  const [displayedText, setDisplayedText] = useState('');

  useEffect(() => {
    let i = 0;
    const intervalId = setInterval(() => {
      if (i < text.length) {
        setDisplayedText((prev) => prev + text[i]);
        i++;
      } else {
        clearInterval(intervalId);
      }
    }, 150); // Adjust the typing speed here

    return () => clearInterval(intervalId);
  }, [text]);

  return (
    <span className="inline-block">
      {displayedText}
    </span>
  );
};

export default TypewriterEffect;