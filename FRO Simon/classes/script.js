class Rectangle {
    constructor() {
        this.xPos = 10;
        this.yPos = 10;
        this.width = 300;
        this.height = 100;
        this.orientation = 'portrait';
        this.id = document.getElementById('canvas');
        this.context = this.id.getContext('2d');
    }
    draw(penWidth, color) {
        this.context.beginPath();
        this.context.strokeStyle = color;
        this.context.lineWidth = penWidth;
        this.context.moveTo(this.xPos, this.yPos);
        this.context.lineTo(this.xPos, this.yPos + this.height);
        this.context.lineTo(this.xPos + this.width, this.yPos + this.height);
        this.context.lineTo(this.xPos + this.width, this.yPos);
        this.context.lineTo(this.xPos, this.yPos);
        this.context.stroke();
    }
}

drawRectangle = new Rectangle();

drawRectangle.draw(10, 'green');
