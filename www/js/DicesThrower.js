class DicesThrower{

    constructor() {
    }
    /**
     * @public
     * @returns {string}
     * @method
     */
    GetLeft() {
        return (this.#getRandomArbitrary(14,76))+"%";
    }

    /**
     * @public
     * @returns {string}
     * @method
     */
    GetTop() {
        return (this.#getRandomArbitrary(13,72))+"%";
    }

    /**
     * @private
     * @param min {int}
     * @param max {int}
     * @returns {int}
     */
    #getRandomArbitrary(min, max) {
        return Math.random() * (max - min) + min;
    }
}

export default new DicesThrower()

