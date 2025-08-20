<div class="hero-illustration">
    <div class="laptop-container">
        <div class="laptop">
            <div class="laptop-screen">
                <div class="screen-content">
                    <!-- Pantallas flotantes -->
                    <div class="floating-screen screen-1">
                        <div class="screen-header"></div>
                        <div class="screen-body">
                            <div class="chart-bars">
                                <div class="bar" style="height: 60%;"></div>
                                <div class="bar" style="height: 80%;"></div>
                                <div class="bar" style="height: 40%;"></div>
                                <div class="bar" style="height: 90%;"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="floating-screen screen-2">
                        <div class="screen-header"></div>
                        <div class="screen-body">
                            <div class="profile-card">
                                <div class="avatar"></div>
                                <div class="profile-info">
                                    <div class="line"></div>
                                    <div class="line short"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="floating-screen screen-3">
                        <div class="screen-header"></div>
                        <div class="screen-body">
                            <div class="notification-list">
                                <div class="notification"></div>
                                <div class="notification"></div>
                                <div class="notification"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="laptop-base"></div>
        </div>
        
        <!-- Elementos decorativos -->
        <div class="wifi-signal">
            <div class="signal-bar"></div>
            <div class="signal-bar"></div>
            <div class="signal-bar"></div>
        </div>
        
        <div class="floating-icons">
            <div class="icon icon-1">📊</div>
            <div class="icon icon-2">🔔</div>
            <div class="icon icon-3">💼</div>
        </div>
    </div>
</div>

<style>
    .hero-illustration {
        position: relative;
        max-width: 600px;
        height: 400px;
        margin: 0 auto;
    }
    
    .laptop-container {
        position: relative;
        width: 100%;
        height: 100%;
        perspective: 1000px;
    }
    
    .laptop {
        position: relative;
        width: 300px;
        height: 200px;
        margin: 0 auto;
        transform: rotateX(10deg) rotateY(-10deg);
    }
    
    .laptop-screen {
        background: linear-gradient(145deg, #1f2937, #374151);
        border-radius: 8px 8px 0 0;
        height: 180px;
        width: 100%;
        border: 3px solid #4b5563;
        position: relative;
        overflow: hidden;
    }
    
    .laptop-base {
        background: linear-gradient(145deg, #6b7280, #9ca3af);
        height: 8px;
        width: 320px;
        margin-left: -10px;
        border-radius: 0 0 15px 15px;
        border: 2px solid #4b5563;
    }
    
    .screen-content {
        position: relative;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at center, #1e40af, #1e3a8a);
    }
    
    .floating-screen {
        position: absolute;
        background: rgba(255, 255, 255, 0.95);
        border-radius: 8px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(10px);
        animation: float 3s ease-in-out infinite;
    }
    
    .screen-1 {
        width: 80px;
        height: 60px;
        top: 20px;
        left: 10px;
        animation-delay: 0s;
        background: linear-gradient(145deg, #ec4899, #be185d);
    }
    
    .screen-2 {
        width: 70px;
        height: 50px;
        top: 30px;
        right: 15px;
        animation-delay: 1s;
        background: linear-gradient(145deg, #10b981, #047857);
    }
    
    .screen-3 {
        width: 90px;
        height: 45px;
        bottom: 20px;
        left: 20px;
        animation-delay: 2s;
        background: linear-gradient(145deg, #3b82f6, #1e40af);
    }
    
    .screen-header {
        height: 8px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 8px 8px 0 0;
    }
    
    .screen-body {
        padding: 5px;
        height: calc(100% - 8px);
    }
    
    .chart-bars {
        display: flex;
        align-items: end;
        height: 100%;
        gap: 3px;
    }
    
    .bar {
        background: rgba(255, 255, 255, 0.8);
        width: 8px;
        border-radius: 2px;
    }
    
    .profile-card {
        display: flex;
        align-items: center;
        gap: 5px;
    }
    
    .avatar {
        width: 20px;
        height: 20px;
        background: rgba(255, 255, 255, 0.8);
        border-radius: 50%;
    }
    
    .profile-info {
        flex: 1;
    }
    
    .line {
        height: 3px;
        background: rgba(255, 255, 255, 0.6);
        border-radius: 2px;
        margin-bottom: 2px;
    }
    
    .line.short {
        width: 60%;
    }
    
    .notification-list {
        display: flex;
        flex-direction: column;
        gap: 3px;
    }
    
    .notification {
        height: 8px;
        background: rgba(255, 255, 255, 0.7);
        border-radius: 2px;
    }
    
    .wifi-signal {
        position: absolute;
        top: 10px;
        right: 10px;
        display: flex;
        gap: 2px;
    }
    
    .signal-bar {
        width: 4px;
        background: #10b981;
        border-radius: 2px;
        animation: pulse 2s ease-in-out infinite;
    }
    
    .signal-bar:nth-child(1) { height: 8px; animation-delay: 0s; }
    .signal-bar:nth-child(2) { height: 12px; animation-delay: 0.3s; }
    .signal-bar:nth-child(3) { height: 16px; animation-delay: 0.6s; }
    
    .floating-icons {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }
    
    .icon {
        position: absolute;
        font-size: 24px;
        animation: float 4s ease-in-out infinite;
    }
    
    .icon-1 {
        top: 10%;
        left: 80%;
        animation-delay: 0.5s;
    }
    
    .icon-2 {
        top: 60%;
        right: 85%;
        animation-delay: 1.5s;
    }
    
    .icon-3 {
        bottom: 10%;
        right: 10%;
        animation-delay: 2.5s;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }
    
    @media (max-width: 768px) {
        .hero-illustration {
            max-width: 400px;
            height: 300px;
        }
        
        .laptop {
            width: 250px;
            height: 160px;
        }
        
        .laptop-screen {
            height: 140px;
        }
    }
</style>
