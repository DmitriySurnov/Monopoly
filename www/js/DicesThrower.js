$(".dice").css("left", function () {
    return (getRandomArbitrary(14,76))+"%";
}).css("top", function () {
    return (getRandomArbitrary(13,72))+"%";
})

function getRandomArbitrary(min, max) {
    return Math.random() * (max - min) + min;
}

