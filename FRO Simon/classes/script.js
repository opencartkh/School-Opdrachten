const id = document.getElementById('canvas');

class canvas {
    constructor(xPos, yPos, width, height, penWidth, color, id) {
        this.yPos = yPos;
        this.xPos = xPos;
        this.width = width;
        this.height = height;
        this.penWidth = penWidth;
        this.color = color;
        this.id = id;
    }
    draw(){

        let xPos = 10;
        let yPos = 10;
        let width = 300;
        let height = 100;
      
        let context = id.getContext('2d');
    
        context.beginPath();
    
        context.strokeStyle = this.color;
        context.lineWidth = this.penWidth;
    
        context.moveTo(xPos, yPos);
    
        context.lineTo(xPos, yPos + height);
        context.lineTo(xPos + width, yPos + height);
    
        context.lineTo(xPos + width, yPos);
        context.lineTo(xPos, yPos);

        context.stroke();
    }
}

let shape = new canvas('4', 'green', id);
shape.draw();
