namespace Jamal;

class LuhnAlgorithm
{
    public function validate(number) -> boolean
    {
        array digits;
        let digits = (array) str_split(number);

        var digit, position, hash = "";

        for position, digit in digits->reversed() {
            let hash .= (position % 2 ? digit * 2 : digit);
        }

        var result;
        let result = array_sum(str_split(hash));

        return (result % 10 == 0);
    }
}
