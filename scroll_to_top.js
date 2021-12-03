import React, {useState} from "react";

function ScrollToTop() {
    const [isVisible, setIsVisible] = useState(false);

    const toggleVisibility = () => {
        const scrolled = document.documentElement.scrollTop;
        if (scrolled > 300) {
            setIsVisible(true);
        } else {
            setIsVisible(false);
        }
    };

    const scrollToTop = () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    };

    window.addEventListener("scroll", toggleVisibility);

    return (
        <botton onClick={scrollToTop} style={{display: isVisible ? 'inline' : 'none'}}> Scroll
            To Top</botton>
    );
}

const domContainer = document.querySelector('#scroll_to_top_container');
ReactDOM.render(<ScrollToTop/>, domContainer);
