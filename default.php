<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<title>Stitcher Agency</title>
<link href="assets/favicon.svg" rel="icon" type="image/svg+xml"/>
<link href="assets/favicon.png" rel="icon" sizes="32x32" type="image/png"/>
<link href="assets/favicon.png" rel="apple-touch-icon"/>
<link href="styles.css" rel="stylesheet"/>
</head>
<body>


  <!-- WELCOME POPUP -->
<div class="welcome-modal" id="welcomeModal" aria-hidden="true">
  <div class="welcome-modal__overlay" data-dismiss></div>

  <section
    class="welcome-modal__panel"
    role="dialog"
    aria-modal="true"
    aria-labelledby="welcomeTitle"
  >
    <button class="welcome-modal__close" type="button" aria-label="Close" data-dismiss>×</button>

    <h2 id="welcomeTitle">
      Welcome to <span>Stitcher Agency</span>
    </h2>

    <p>
      We blend <b>real-time</b> tech and thoughtful design to speed up development and reduce waste.
      Have a look around—or jump straight to our services.
    </p>

    <div class="welcome-modal__actions">
      <a href="#services" class="btn primary">Explore our work</a>
      <label class="welcome-modal__remember">
        <input type="checkbox" id="welcomeDontShow"> Don’t show again
      </label>
    </div>
  </section>
</div>




<!-- TOP STRIP -->
<div class="top">
<div class="wrap container">
<div> <bold> SUPPORT@STITCHERAGENCY.COM </bold> </div>
<div class="right">
<span>AGENCY-MON-FRI : 9.00 AM - 5:00 PM</span>
<span class="divider">।</span>
<span>FOLLOW</span>
<span>
<div aria-label="Social media" class="TOP-socials">
<a aria-label="Facebook" href="https://facebook.com/" rel="noopener" target="_blank" title="Facebook">
<svg aria-hidden="true" height="7" viewbox="0 0 24 24" width="7"><path d="M22 12.06C22 6.5 17.52 2 12 2S2 6.5 2 12.06C2 17.06 5.66 21.2 10.44 22v-7.02H7.9v-2.92h2.54V9.41c0-2.5 1.49-3.88 3.77-3.88 1.09 0 2.23.2 2.23.2v2.45h-1.25c-1.23 0-1.61.77-1.61 1.56v1.87h2.74l-.44 2.92h-2.3V22C18.34 21.2 22 17.06 22 12.06z" fill="currentColor"></path></svg>
</a>
<a aria-label="LinkedIn" href="https://www.linkedin.com/" rel="noopener" target="_blank" title="LinkedIn">
<svg aria-hidden="true" height="7" viewbox="0 0 24 24" width="7"><path d="M6.94 8.99H4V20h2.94V8.99zM5.47 7.67c.94 0 1.7-.77 1.7-1.71S6.41 4.25 5.47 4.25s-1.7.77-1.7 1.71.76 1.71 1.7 1.71zM20 20h-2.94v-5.64c0-1.35-.03-3.08-1.88-3.08-1.88 0-2.17 1.46-2.17 2.97V20H10.1V8.99h2.82v1.5h.04c.39-.74 1.36-1.52 2.8-1.52 2.99 0 3.55 1.97 3.55 4.52V20z" fill="currentColor"></path></svg>
</a>
<a aria-label="X (Twitter)" href="https://x.com/" rel="noopener" target="_blank" title="X (Twitter)">
<svg aria-hidden="true" height="7" viewbox="0 0 24 24" width="7"><path d="M18.244 2H21l-6.5 7.43L22 22h-6.9l-4.5-6.2L5.4 22H3l7.1-8.1L2 2h7l4 5.66L18.244 2zm-1.046 18h2.086L8.03 4H5.828l11.37 16z" fill="currentColor"></path></svg>
</a>
<a aria-label="YouTube" href="https://youtube.com/" rel="noopener" target="_blank" title="YouTube">
<svg aria-hidden="true" height="7" viewbox="0 0 24 24" width="7"><path d="M23.5 6.2s-.23-1.66-.95-2.39c-.91-.95-1.92-.95-2.39-1C16.24 2.5 12 2.5 12 2.5h-.01s-4.24 0-8.15.31c-.47.05-1.48.05-2.39 1C.73 4.54.5 6.2.5 6.2S.25 8.15.25 10.1v1.8c0 1.95.25 3.9.25 3.9s.23 1.66.95 2.39c.91.95 2.1.92 2.64 1.02 1.92.2 8 .3 8 .3s4.24 0 8.15-.31c.47-.05 1.48-.05 2.39-1 .71-.73.95-2.39.95-2.39s.25-1.95.25-3.9v-1.8c0-1.95-.25-3.9-.25-3.9zM9.75 13.9V7.9l6.25 3-6.25 3z" fill="currentColor"></path></svg>
</a>
<a aria-label="TikTok" href="https://www.tiktok.com/" rel="noopener" target="_blank" title="TikTok">
<svg aria-hidden="true" height="7" viewbox="0 0 24 24" width="7"><path d="M21.25 8.74c-2.7 0-5.01-1.36-6.17-3.29v8.4a5.63 5.63 0 1 1-4.9-5.58v2.77a2.77 2.77 0 1 0 2.77 2.77V2h2.74c.25 1.99 1.73 3.66 3.56 4.24V8.74z" fill="currentColor"></path></svg>
</a>
<a aria-label="Reddit" href="https://www.reddit.com/" rel="noopener" target="_blank" title="Reddit">
<svg aria-hidden="true" height="7" viewbox="0 0 24 24" width="7"><path d="M22 12.07c0-1.17-.95-2.12-2.12-2.12-.55 0-1.05.21-1.43.55-1.35-.93-3.2-1.54-5.25-1.61l.9-4.22 2.95.62a1.62 1.62 0 1 0 .18-1.05l-3.53-.74a.53.53 0 0 0-.62.4l-1.05 4.9c-2.1.04-3.99.65-5.36 1.61a2.12 2.12 0 1 0-2.43 3.41c-.03.17-.05.35-.05.54 0 2.87 3.46 5.2 7.73 5.2s7.74-2.33 7.74-5.2c0-.18-.02-.37-.06-.54.47-.38.8-.96.8-1.66zM8.4 13.27a1.15 1.15 0 1 1 0-2.3 1.15 1.15 0 0 1 0 2.3zm7.2 0a1.15 1.15 0 1 1 0-2.3 1.15 1.15 0 0 1 0 2.3zM12 18.02c-1.61 0-2.95-.74-3.36-1.74h6.72c-.4 1-1.74 1.74-3.36 1.74z" fill="currentColor"></path></svg>
</a>
<a aria-label="Website/Links" href="https://linktr.ee/" rel="noopener" target="_blank" title="Links">
<svg aria-hidden="true" height="7" viewbox="0 0 24 24" width="7"><path d="M3.9 12a8.1 8.1 0 0 1 8.1-8.1c2.04 0 3.9.77 5.3 2.04l-2.38 2.38A4.86 4.86 0 0 0 12 6.9 5.1 5.1 0 0 0 6.9 12c0 .77.18 1.5.5 2.14l-2.38 2.38A8.06 8.06 0 0 1 3.9 12zm4.7 0a5.1 5.1 0 0 0 5.1 5.1c.77 0 1.5-.18 2.14-.5l2.38 2.38A8.06 8.06 0 0 1 12 20.1 8.1 8.1 0 0 1 3.9 12h4.7z" fill="currentColor"></path></svg>
</a>
<a aria-label="Pinterest" href="https://www.pinterest.com/stitcheragency/" rel="noopener" target="_blank" title="Pinterest">
<svg aria-hidden="true" height="7" viewbox="0 0 24 24" width="7"><path d="M12.04 2C6.9 2 4 5.22 4 8.8c0 2.6 1.46 4.57 3.66 4.57 1.76 0 2.55-1.15 2.55-2.52 0-1.53-.98-3.8 2.07-3.8 1.76 0 3.05 1.1 3.05 3.36 0 2.32-1.2 3.93-2.77 3.93-.86 0-1.5-.7-1.3-1.56.25-1.02.72-2.12.72-2.86 0-.66-.36-1.21-1.09-1.21-1.11 0-2 1.15-2 2.7 0 1 .34 1.68.34 1.68l-1.37 5.82c-.41 1.74-.06 3.87-.03 4.08h.02c.03.05 5.9-2.07 5.9-8.14.01-3.52-2.48-5.34-5.73-5.34z" fill="currentColor"></path></svg>
</a>
</div>
</span>
</div>
</div>
</div>
<!-- HEADER -->
<header class="header">
<div class="head container">
<div class="brand">
<img alt="Stitcher Agency Logo" class="logo" src="assets/Logo/Logo-2025.png"/>
</div>
<!-- Centered NAV (grid column 2, self-centered) -->
<nav class="nav">
<a class="pill brand" href="#services">REAL TIME</a>
<a class="pill brand" href="#services">CUSTOM</a>
<!-- DESIGN STUDIO + dropdown -->
<div class="dropdown">
<a aria-expanded="false" aria-haspopup="true" class="pill brand" href="#services">DESIGN STUDIO</a>
<div aria-label="Design Studio" class="menu" role="menu">
<a href="#sewing" role="menuitem">SEWING PATTERN</a>
<a href="#3d" role="menuitem">3D DESIGN</a>
<a href="#techpack" role="menuitem">TECH PACK</a>
<a href="#fabric" role="menuitem">DIGITAL FABRIC</a>
<a href="#accessories" role="menuitem">DIGITAL ACCESSORIES</a>
<a href="#forecasting" role="menuitem">FASHION TREND FORECASTING</a>
</div>
</div>
<a class="pill brand" href="#hub">SUPPORT</a>
<a class="pill brand" href="#hub">STUDY HUB</a>
<a class="btn demo" href="#demo">BOOK A 15 MINUTE DEMO</a>
</nav>
<div class="nav-right"><a class="pill" href="#signin">SIGN IN</a><span aria-hidden="true" class="icon-table"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></span></div></div>
</header>
<!-- HERO -->
<section class="hero" id="hero">
<div class="container">
<h1 class="title">
<span class="outline">STITCHER</span>
<span class="sub">AGENCY</span>
</h1>
<div class="cta">
<a class="btn primary" href="#services">Discover our products</a>
<a class="btn ghost" href="#about">Learn more About us</a>
</div>
</div>
<div class="hr-curvy"></div>
<div class="hero-dots"><i></i><i></i><i></i><i></i><i></i></div>
</section>
<!-- SERVICES -->
<section class="container" id="services">
<div class="section-title">
<h2>KEY AREAS OF EXPERTISE</h2>
<div class="sub">VIEW OUR WORK</div>
<div class="our-services">
<button class="pill brand">OUR SERVICES</button>
</div>
</div>
<div class="slider-wrap">
<button aria-label="Previous" class="slider-btn prev">◀</button>
<div aria-label="Key areas of expertise" aria-live="polite" aria-roledescription="carousel" class="slider" role="region" tabindex="0">
<div class="track" id="track" role="list">
<article aria-roledescription="slide" class="card" role="group">
<div class="protect"><img alt="Card preview" src="assets/Our Servise/3D Apprel.jpg" style="width:100%;border-radius:8px;margin-bottom:8px;"/><span aria-hidden="true" class="guard"></span></div>
<div class="micro"></div><h3>3D APPAREL</h3><p>We provide 3D apparel support to help your brand create faster, smarter, and more sustainable designs with VStitcher, CLO3D, and digital sampling solutions.</p></article>
<article aria-roledescription="slide" class="card" role="group">
<div class="protect"><img alt="Card preview" src="assets/Our Servise/Tech Pack.jpg" style="width:100%;border-radius:8px;margin-bottom:8px;"/><span aria-hidden="true" class="guard"></span></div>
<div class="micro"></div><h3>Tech Pack</h3><p>We create detailed Tech Packs with measurements, construction, trims, and finishing guidelines—helping your brand communicate clearly with factories and ensure accurate, high-quality production.</p></article>
<article aria-roledescription="slide" class="card" role="group">
<div class="protect"><img alt="Card preview" src="assets/Our Servise/Sewing pattern.jpg" style="width:100%;border-radius:8px;margin-bottom:8px;"/><span aria-hidden="true" class="guard"></span></div>
<div class="micro"></div><h3>Sewing Pattern</h3><p>We provide expert sewing pattern support for your brand, ensuring accurate, high-quality patterns that streamline your production and enhance garment fit and consistency.</p></article>
<article aria-roledescription="slide" class="card" role="group">
<div class="protect"><img alt="Card preview" src="assets/Our Servise/Digital Fabric.jpg" style="width:100%;border-radius:8px;margin-bottom:8px;"/><span aria-hidden="true" class="guard"></span></div>
<div class="micro"></div><h3>DIGITAL FABRIC</h3><p>We offer digital fabric solutions, providing high-resolution fabric textures and designs for accurate 3D visualization, helping brands streamline sampling and production</p></article>
<article aria-roledescription="slide" class="card" role="group">
<div class="protect"><img alt="Card preview" src="assets/Our Servise/3D Trims.jpg" style="width:100%;border-radius:8px;margin-bottom:8px;"/><span aria-hidden="true" class="guard"></span></div>
<div class="micro"></div><h3>3D TRIMS</h3><p>We provide 3D trims support, offering realistic digital representations of buttons, zippers, and accessories to enhance your 3D apparel designs and streamline production</p></article>
<article aria-roledescription="slide" class="card" role="group">
<div class="protect"><img alt="Card preview" src="assets/Our Servise/Brand Quality Manual.png" style="width:100%;border-radius:8px;margin-bottom:8px;"/><span aria-hidden="true" class="guard"></span></div>
<div class="micro"></div><h3>Brand Quality Manual</h3><p>We create comprehensive Brand Quality Manuals to ensure consistent standards across your products, helping maintain brand integrity and streamline quality control.</p></article>
<article aria-roledescription="slide" class="card" role="group">
<div class="protect"><img alt="Card preview" src="assets/Our Servise/Graphic Design.jpg" style="width:100%;border-radius:8px;margin-bottom:8px;"/><span aria-hidden="true" class="guard"></span></div>
<div class="micro"></div><h3>Graphic Design</h3><p>We provide creative graphic design support to visually strengthen your brand through impactful logos, marketing materials, and digital assets.</p></article>
<article aria-roledescription="slide" class="card" role="group">
<div class="protect"><img alt="Card preview" src="assets/Our Servise/Marketing Design.jpg" style="width:100%;border-radius:8px;margin-bottom:8px;"/><span aria-hidden="true" class="guard"></span></div>
<div class="micro"></div><h3>Fashion Train Forecasting</h3><p>We provide fashion trend forecasting support, delivering insights on upcoming styles, colors, fabrics, and consumer preferences to help your brand stay ahead of the market.</p></article>
</div>
</div>
<button aria-label="Next" class="slider-btn next">▶</button>
<div aria-label="Slide pagination" class="slider-dots" id="dots"></div>
</div>
</section>
<!-- OUR TECHNOLOGY -->
<section class="tech" id="tech">
<div class="container">
<p class="pill brand" style="display:inline-block">Our technology</p>
<h3>Tech solutions.<br/>Made to your needs.</h3>
<div class="tech-grid v2">
<div class="tech-col">
<h4 class="t-head"><i aria-hidden="true"></i>RealTime</h4>
<p>Accelerate your time-to-market with RealTime by taking data-driven decisions throughout the product development process, while fostering transparency and sustainable practices.</p>
<a class="btn demo" href="#realtime">Explore</a>
</div>
<div class="tech-col">
<h4 class="t-head"><i aria-hidden="true"></i>Custom</h4>
<p>From the digital twins realism to an order and management system, Custom empowers you to bring personalization to life while minimizing waste and promoting sustainable consumption.</p>
<a class="btn demo" href="#custom">Explore</a>
</div>
<div class="tech-visual protect">
<img alt="Technology illustration" src="assets/Our Servise/Image for inside website.png"/>
<span aria-hidden="true" class="guard"></span>
</div>
</div>
</div>
</section>
<!-- DUO PANELS -->
<section class="duo container">
<div class="grid">
<article class="panel">
<div class="side"><span>03</span><span>Real-time &amp; data</span><span>02</span><span>Design studio</span><span>01</span><span>Chat &amp; order</span></div>
<div class="body">
<p class="pill" style="display:inline-block">RealTime</p>
<h4>Experience the power of RealTime</h4>
<p>Transform your fashion business with instant collaboration and enhanced efficiency.</p>
<div class="jacket"></div>
<div class="bar">
<span>Discover the possibilities of RealTime</span>
<div>
<span class="chip">TALK TO US</span>
<span class="chip ghost">Know more</span>
</div>
</div>
</div>
</article>
<article class="panel">
<div class="side"><span>03</span><span>MTO OMS</span><span>02</span><span>Design integrations</span><span>01</span><span>Digital twins</span></div>
<div class="body">
<p class="pill" style="display:inline-block">Custom</p>
<h4>Discover the freedom of customization</h4>
<p>Omnichannel POS toolkit for 3D/2D product personalization across all touchpoints.</p>
<div class="jacket"></div>
<div class="bar">
<span>Transform your vision with Custom</span>
<div>
<span class="chip">TALK TO US</span>
<span class="chip ghost">Know more</span>
</div>
</div>
</div>
</article>
</div>
</section>
<!-- TECH LOGOS -->
<section class="tech-logos container" id="tech">
<h3>TECHNOLOGY WE USE</h3>
<div class="logo-slider-wrap">
<button aria-label="Previous" class="slider-btn prev logos-prev">◀</button>
<div aria-label="Technology logos" aria-live="polite" aria-roledescription="carousel" class="logo-slider" role="region" tabindex="0">
<div class="logo-track" id="logosTrack" role="list">
<article aria-roledescription="slide" class="logo-card v2" role="group">
<div class="cap">
<img alt="CLO logo" src="assets/Software Icon/CLO3D.png">
<span class="brand-title">CLO</span>
<span class="brand-sub">CLO Virtual Fashion</span>
</img></div>
<div class="cap-divider"></div>
<div class="cap-body"><p>CLO is a 3D garment visualization software that enables realistic virtual sampling, reducing physical prototypes, saving time, and streamlining the fashion design-to-production process.</p></div>
</article>
<article aria-roledescription="slide" class="logo-card v2" role="group">
<div class="cap">
<img alt="Style3D logo" src="assets/Software Icon/Style3D.png"/>
<span class="brand-title">Style3D</span>
<span class="brand-sub">Digital Fashion Suite</span>
</div>
<div class="cap-divider"></div>
<div class="cap-body"><p>Style3D is an advanced 3D fashion software that offers digital design, fabric simulation, and virtual fitting to accelerate product development and enhance brand creativity.</p></div>
</article>
<article aria-roledescription="slide" class="logo-card v2" role="group">
<div class="cap">
<img alt="Maya logo" src="assets/Software Icon/Maya.png"/>
<span class="brand-title">Maya</span>
<span class="brand-sub">Autodesk</span>
</div>
<div class="cap-divider"></div>
<div class="cap-body"><p>Maya 3D is a powerful 3D software used for modeling, animation, simulation, and rendering, widely adopted in fashion, film, gaming, and product design.</p></div>
</article>
<article aria-roledescription="slide" class="logo-card v2" role="group">
<div class="cap">
<img alt="KeyShot logo" src="assets/Software Icon/KeyShot.png"/>
<span class="brand-title">KeyShot</span>
<span class="brand-sub">Rendering</span>
</div>
<div class="cap-divider"></div>
<div class="cap-body"><p>KeyShot is a 3D rendering and animation software known for its fast, accurate, and photorealistic visuals, helping designers bring products to life with stunning detail.</p></div>
</article>
<article aria-roledescription="slide" class="logo-card v2" role="group">
<div class="cap">
<img alt="RealFlow logo" src="assets/Software Icon/RealFlow.png"/>
<span class="brand-title">RealFlow</span>
<span class="brand-sub">Fluid Dynamics</span>
</div>
<div class="cap-divider"></div>
<div class="cap-body"><p>RealFlow is a leading fluid and dynamics simulation software, used to create realistic liquid, soft body, and particle effects for 3D design, animation, and visualizations.</p></div>
</article>
<article aria-roledescription="slide" class="logo-card v2" role="group">
<div class="cap">
<img alt="Substance logo" src="assets/Software Icon/Substance.png"/>
<span class="brand-title">Substance</span>
<span class="brand-sub">Materials</span>
</div>
<div class="cap-divider"></div>
<div class="cap-body"><p>Substance Source is a high-quality library of customizable materials and textures, enabling designers to create realistic 3D surfaces for fashion, product, and environment design.</p></div>
</article>
<article aria-roledescription="slide" class="logo-card v2" role="group">
<div class="cap">
<img alt="Optitex logo" src="assets/Software Icon/Optitex.png"/>
<span class="brand-title">Optitex</span>
<span class="brand-sub">CAD/CAM</span>
</div>
<div class="cap-divider"></div>
<div class="cap-body"><p>Optitex is a leading 2D and 3D CAD/CAM software for fashion and apparel, offering digital pattern making, virtual sampling, and accurate garment visualization to streamline production.</p></div>
</article>
<article aria-roledescription="slide" class="logo-card v2" role="group">
<div class="cap">
<img alt="Gerber logo" src="assets/Software Icon/Gerber.png"/>
<span class="brand-title">Gerber</span>
<span class="brand-sub">AccuMark</span>
</div>
<div class="cap-divider"></div>
<div class="cap-body"><p>Gerber Technology provides integrated CAD/CAM solutions for the fashion and apparel industry, offering digital pattern design, grading, marker making, and automated production tools to optimize workflow and efficiency.</p></div>
</article>
<article aria-roledescription="slide" class="logo-card v2" role="group">
<div class="cap">
<img alt="Lectra logo" src="assets/Software Icon/Lectra.png"/>
<span class="brand-title">Lectra</span>
<span class="brand-sub">CAD/CAM</span>
</div>
<div class="cap-divider"></div>
<div class="cap-body"><p>Lectra offers advanced CAD/CAM and 3D solutions for the fashion and apparel industry, enabling digital pattern making, fabric optimization, and virtual prototyping to streamline design and production.</p></div>
</article>
<article aria-roledescription="slide" class="logo-card v2" role="group">
<div class="cap">
<img alt="Blender logo" src="assets/Software Icon/Blender.png"/>
<span class="brand-title">Blender</span>
<span class="brand-sub">Open Source</span>
</div>
<div class="cap-divider"></div>
<div class="cap-body"><p>Blender is a free, open-source 3D software for modeling, animation, rendering, and simulation, widely used in fashion, product design, and visual effects for creating high-quality digital content.</p></div>
</article>
<article aria-roledescription="slide" class="logo-card v2" role="group">
<div class="cap">
<img alt="Unreal logo" src="assets/Software Icon/Unreal En.png"/>
<span class="brand-title">Unreal</span>
<span class="brand-sub">Real-time</span>
</div>
<div class="cap-divider"></div>
<div class="cap-body"><p>Unreal Engine is a powerful real-time 3D creation platform used for immersive experiences, virtual prototyping, and photorealistic visualizations in fashion, gaming, and product design.</p></div>
</article>
<article aria-roledescription="slide" class="logo-card v2" role="group">
<div class="cap">
<img alt="Vizoo xTex logo" src="assets/Software Icon/Vizoo.png"/>
<span class="brand-title">Vizoo xTex</span>
<span class="brand-sub">Fabric Scan</span>
</div>
<div class="cap-divider"></div>
<div class="cap-body"><p>Vizoo xTex is a high-resolution fabric scanner and software that creates photorealistic digital materials for 3D design, virtual prototyping, and fashion visualization.</p></div>
</article>
</div>
</div>
<button aria-label="Next" class="slider-btn next logos-next">▶</button>
<div class="slider-dots" id="logosDots"></div>
</div>
<div class="workbar">
<span>Work with us</span>
<div>
<span class="chip">TALK TO US</span>
<span class="chip ghost">Know more</span>
</div>
</div>
</section>
<!-- FASHION HUB -->
<section class="hub container" id="hub">
<div class="head">
<div>
<h3>FASHION HUB</h3>
<p style="color:#cbd5e1">Stay connected, Stay inspired.</p>
</div>
<a href="#">View all</a>
</div>
<div class="hub-grid">
<article class="hub-card"><div class="thumb"></div><div class="hub-body"><span class="badge">Blog Post</span><h4>A Perspective on fashion within video game</h4><div class="meta"><span>Obaydor Rahman</span><span>December 02, 2023</span></div></div></article>
<article class="hub-card"><div class="thumb"></div><div class="hub-body"><span class="badge">Blog Post</span><h4>A Perspective on fashion within video game</h4><div class="meta"><span>Obaydor Rahman</span><span>December 02, 2023</span></div></div></article>
<article class="hub-card"><div class="thumb"></div><div class="hub-body"><span class="badge">Blog Post</span><h4>A Perspective on fashion within video game</h4><div class="meta"><span>Obaydor Rahman</span><span>December 02, 2023</span></div></div></article>
</div>
</section>
<!-- FOOTER -->
<footer class="footer">
<div class="grid container">
<div>
<div class="foot-brand">
<img alt="Stitcher Agency Logo" class="logo" src="assets/Logo/Logo-2025.png"/></div>
<form class="news" onsubmit="return false;">
<label for="mail">Join our newsletter to stay up to date on features and releases.</label>
<div class="row">
<input id="mail" placeholder="Enter your email here" required="" type="email"/>
<button>Subscribe</button>
</div>
<p style="font-size:12px;color:#cbd5e1">By subscribing you agree with our <a href="#">Privacy Policy</a>.</p>
<a href="mailto:info@stitcheragency.com">info@stitcheragency.com</a>
</form>
<div aria-label="Social media" class="footer-socials">
<a aria-label="Facebook" href="https://facebook.com/" rel="noopener" target="_blank" title="Facebook">
<svg aria-hidden="true" height="16" viewbox="0 0 24 24" width="16"><path d="M22 12.06C22 6.5 17.52 2 12 2S2 6.5 2 12.06C2 17.06 5.66 21.2 10.44 22v-7.02H7.9v-2.92h2.54V9.41c0-2.5 1.49-3.88 3.77-3.88 1.09 0 2.23.2 2.23.2v2.45h-1.25c-1.23 0-1.61.77-1.61 1.56v1.87h2.74l-.44 2.92h-2.3V22C18.34 21.2 22 17.06 22 12.06z" fill="currentColor"></path></svg>
</a>
<a aria-label="LinkedIn" href="https://www.linkedin.com/" rel="noopener" target="_blank" title="LinkedIn">
<svg aria-hidden="true" height="16" viewbox="0 0 24 24" width="16"><path d="M6.94 8.99H4V20h2.94V8.99zM5.47 7.67c.94 0 1.7-.77 1.7-1.71S6.41 4.25 5.47 4.25s-1.7.77-1.7 1.71.76 1.71 1.7 1.71zM20 20h-2.94v-5.64c0-1.35-.03-3.08-1.88-3.08-1.88 0-2.17 1.46-2.17 2.97V20H10.1V8.99h2.82v1.5h.04c.39-.74 1.36-1.52 2.8-1.52 2.99 0 3.55 1.97 3.55 4.52V20z" fill="currentColor"></path></svg>
</a>
<a aria-label="X (Twitter)" href="https://x.com/" rel="noopener" target="_blank" title="X (Twitter)">
<svg aria-hidden="true" height="16" viewbox="0 0 24 24" width="16"><path d="M18.244 2H21l-6.5 7.43L22 22h-6.9l-4.5-6.2L5.4 22H3l7.1-8.1L2 2h7l4 5.66L18.244 2zm-1.046 18h2.086L8.03 4H5.828l11.37 16z" fill="currentColor"></path></svg>
</a>
<a aria-label="YouTube" href="https://youtube.com/" rel="noopener" target="_blank" title="YouTube">
<svg aria-hidden="true" height="16" viewbox="0 0 24 24" width="16"><path d="M23.5 6.2s-.23-1.66-.95-2.39c-.91-.95-1.92-.95-2.39-1C16.24 2.5 12 2.5 12 2.5h-.01s-4.24 0-8.15.31c-.47.05-1.48.05-2.39 1C.73 4.54.5 6.2.5 6.2S.25 8.15.25 10.1v1.8c0 1.95.25 3.9.25 3.9s.23 1.66.95 2.39c.91.95 2.1.92 2.64 1.02 1.92.2 8 .3 8 .3s4.24 0 8.15-.31c.47-.05 1.48-.05 2.39-1 .71-.73.95-2.39.95-2.39s.25-1.95.25-3.9v-1.8c0-1.95-.25-3.9-.25-3.9zM9.75 13.9V7.9l6.25 3-6.25 3z" fill="currentColor"></path></svg>
</a>
<a aria-label="TikTok" href="https://www.tiktok.com/" rel="noopener" target="_blank" title="TikTok">
<svg aria-hidden="true" height="16" viewbox="0 0 24 24" width="16"><path d="M21.25 8.74c-2.7 0-5.01-1.36-6.17-3.29v8.4a5.63 5.63 0 1 1-4.9-5.58v2.77a2.77 2.77 0 1 0 2.77 2.77V2h2.74c.25 1.99 1.73 3.66 3.56 4.24V8.74z" fill="currentColor"></path></svg>
</a>
<a aria-label="Reddit" href="https://www.reddit.com/" rel="noopener" target="_blank" title="Reddit">
<svg aria-hidden="true" height="16" viewbox="0 0 24 24" width="16"><path d="M22 12.07c0-1.17-.95-2.12-2.12-2.12-.55 0-1.05.21-1.43.55-1.35-.93-3.2-1.54-5.25-1.61l.9-4.22 2.95.62a1.62 1.62 0 1 0 .18-1.05l-3.53-.74a.53.53 0 0 0-.62.4l-1.05 4.9c-2.1.04-3.99.65-5.36 1.61a2.12 2.12 0 1 0-2.43 3.41c-.03.17-.05.35-.05.54 0 2.87 3.46 5.2 7.73 5.2s7.74-2.33 7.74-5.2c0-.18-.02-.37-.06-.54.47-.38.8-.96.8-1.66zM8.4 13.27a1.15 1.15 0 1 1 0-2.3 1.15 1.15 0 0 1 0 2.3zm7.2 0a1.15 1.15 0 1 1 0-2.3 1.15 1.15 0 0 1 0 2.3zM12 18.02c-1.61 0-2.95-.74-3.36-1.74h6.72c-.4 1-1.74 1.74-3.36 1.74z" fill="currentColor"></path></svg>
</a>
<a aria-label="Website/Links" href="https://linktr.ee/" rel="noopener" target="_blank" title="Links">
<svg aria-hidden="true" height="16" viewbox="0 0 24 24" width="16"><path d="M3.9 12a8.1 8.1 0 0 1 8.1-8.1c2.04 0 3.9.77 5.3 2.04l-2.38 2.38A4.86 4.86 0 0 0 12 6.9 5.1 5.1 0 0 0 6.9 12c0 .77.18 1.5.5 2.14l-2.38 2.38A8.06 8.06 0 0 1 3.9 12zm4.7 0a5.1 5.1 0 0 0 5.1 5.1c.77 0 1.5-.18 2.14-.5l2.38 2.38A8.06 8.06 0 0 1 12 20.1 8.1 8.1 0 0 1 3.9 12h4.7z" fill="currentColor"></path></svg>
</a>
<a aria-label="Pinterest" href="https://www.pinterest.com/" rel="noopener" target="_blank" title="Pinterest">
<svg aria-hidden="true" height="16" viewbox="0 0 24 24" width="16"><path d="M12.04 2C6.9 2 4 5.22 4 8.8c0 2.6 1.46 4.57 3.66 4.57 1.76 0 2.55-1.15 2.55-2.52 0-1.53-.98-3.8 2.07-3.8 1.76 0 3.05 1.1 3.05 3.36 0 2.32-1.2 3.93-2.77 3.93-.86 0-1.5-.7-1.3-1.56.25-1.02.72-2.12.72-2.86 0-.66-.36-1.21-1.09-1.21-1.11 0-2 1.15-2 2.7 0 1 .34 1.68.34 1.68l-1.37 5.82c-.41 1.74-.06 3.87-.03 4.08h.02c.03.05 5.9-2.07 5.9-8.14.01-3.52-2.48-5.34-5.73-5.34z" fill="currentColor"></path></svg>
</a>
</div>

</div>
<div>
<div class="cols">
<div><h5>REAL TIME</h5><a>How it works</a><a>Impact</a><a>Features</a><a>FAQs</a></div>
<div><h5>CUSTOM</h5><a>How it works</a><a>Impact</a><a>Features</a><a>FAQs</a></div>
<div><h5>DESIGN STUDIO</h5><a>Sewing Pattern</a><a>3D Clothing Design</a><a>Tech Pack</a><a>Digital Fabric</a><a>Digital Accessories</a><a>Trend Forecasting</a><a>Animal Dress</a></div>
<div><h5>COMPANY</h5><a>Mission</a><a>Impact</a><a>History</a><a>Work with us</a></div>
<div><h5>STUDY HUB</h5><a>Case Study</a><a>Articles</a><a>Podcast</a><a>Blog Post</a></div>
</div>
<div class="copy">© <span id="year"></span> Stitcher Agency — stitcheragency.com</div>
</div>
</div>
</footer>
<script>
  // Disable right-click and drag on protected areas
  document.addEventListener('contextmenu', (e) => {
    if (e.target.closest('.protect')) e.preventDefault();
  });
  document.addEventListener('dragstart', (e) => {
    if (e.target.closest('.protect')) e.preventDefault();
  });
</script>
<script src="script.js"></script>
</body>
</html>