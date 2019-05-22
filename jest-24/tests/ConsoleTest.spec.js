describe('Describe success', () => {
    console.log('This is a message logged inside a describe.')

    it('Console log string', () => {
        console.log('Hobnobs')
    })

    it('Console log array', () => {
        console.log([
            'Hobnobs',
            'Digestives',
            'Jaffa Cakes'
        ])
    })

    it('Console log object', () => {
        console.log({
            biscuits: [
                'Hobnobs',
                'Digestives',
                'Jaffa Cakes'
            ]
        })
    })

    it('Console log multiple', () => {
        console.log('This', 'is', 'the', 'same', 'call')
        console.log('This is a different call')
    })
})
