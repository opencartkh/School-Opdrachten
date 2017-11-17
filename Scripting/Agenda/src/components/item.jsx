import React from 'react';

/**
 * Item component
 * @param props
 * @returns {XML}
 */
class Item extends React.Component {

    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="item">
              <div className="item__titel">
                {this.props.titel}
              </div>
              <div className="item__tijd">
                {this.props.tijd}
              </div>
              <div className="item__extra">
                {this.props.extra}
              </div>
            </div>
        );
    }

}

export default Item;
