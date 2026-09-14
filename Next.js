import React, { useState } from 'react';

const MobileNavbar = () => {
    const [isDark, setIsDark] = useState(true);
    const [isMenuOpen, setIsMenuOpen] = useState(false);

    return (
        <nav className="sticky top-4 z-50 flex items-center justify-between w-[95%] max-w-[500px] mx-auto px-4 py-3 bg-zinc-950/80 backdrop-blur-md rounded-full border border-white/10 shadow-[0_8px_25px_rgba(255,0,0,0.35)] transition-all">
            
            {/* LEFT: Logo & Menu */}
            <div className="flex items-center gap-3">
                {/* Logo RFZ */}
                <a href="#" className="flex items-center justify-center w-10 h-10 bg-white rounded-full text-black font-extrabold text-sm shrink-0 shadow-md">
                    RFZ
                </a>

                {/* Active Menu (Red Pill) */}
                <a href="#" className="px-5 py-2 bg-red-600 text-white text-sm font-semibold rounded-full shadow-lg shadow-red-600/30">
                    Home
                </a>
            </div>

            {/* RIGHT: Action Icons */}
            <div className="flex items-center gap-3">
                
                {/* Light Mode Toggle (Sun) */}
                <button 
                    onClick={() => setIsDark(!isDark)}
                    className="text-white/70 hover:text-white transition-colors duration-200"
                >
                    <svg className="w-5 h-5" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="5"></circle>
                        <line x1="12" y1="1" x2="12" y2="3"></line>
                        <line x1="12" y1="21" x2="12" y2="23"></line>
                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                        <line x1="1" y1="12" x2="3" y2="12"></line>
                        <line x1="21" y1="12" x2="23" y2="12"></line>
                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                    </svg>
                </button>

                {/* Message/Email Icon (Large White Circle) */}
                <button className="flex items-center justify-center w-10 h-10 bg-white text-black rounded-full hover:scale-105 active:scale-95 transition-transform duration-200 shrink-0 shadow-md">
                    <svg className="w-[18px] h-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round">
                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                    </svg>
                </button>

                {/* Hamburger Icon (2 Lines) dengan Animasi Silang (X) ketika di-klik */}
                <button 
                    onClick={() => setIsMenuOpen(!isMenuOpen)}
                    className="flex flex-col justify-center items-end gap-[5px] w-8 h-8 pl-1"
                >
                    <span className={`block w-6 h-[2.5px] bg-white rounded-full transition-all duration-300 ${isMenuOpen ? 'rotate-45 translate-y-[3.5px]' : ''}`}></span>
                    <span className={`block w-5 h-[2.5px] bg-white rounded-full transition-all duration-300 ${isMenuOpen ? '-rotate-45 -translate-y-[4px] w-6' : ''}`}></span>
                </button>
                
            </div>
        </nav>
    );
};

export default MobileNavbar;
