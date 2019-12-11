module.exports = {
  theme: {
    fontFamily: {
    },
    // colors: {
    //     black: '#fff',
    //     white: '#000',
    // },
    extend: {
        width: {
            '1/9': '11.11111111%',
            '2/9': '22.22222222%',
            '3/9': '33.33333333%',
            '4/9': '44.44444444%',
            '5/9': '55.55555556%',
            '6/9': '66.66666667%',
            '7/9': '77.77777778%',
        },
        margin: {
            '1/4': '25%',
            '2/9': '22.22222222%',
            'nfull': '-100%',
            '-15': '-3.6rem'
        }
    },
  },

  variants: {
      backgroundColor: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
      fontSize: ['responsive', 'hover', 'focus']
  },
  plugins: []
}
