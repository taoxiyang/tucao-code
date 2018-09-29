/**
 * @param {string} str
 * @return {number}
 */
var myAtoi = function(str) {
    var o = +(str.trim().match(/^[+-]?\d*/)[0])
    if (isNaN(o))return 0
    if (o < -2147483648)return -2147483648
    if (o > 2147483647)return 2147483647
    return o
}
