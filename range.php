<?php

class Range
{
    private int $start;
    private int $end;

    /**
     * @param int $start
     * @param int $end
     */
    public function __construct(int $start, int $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * @return int
     */
    public function getStart(): int
    {
        return $this->start;
    }

    /**
     * @return int
     */
    public function getEnd(): int
    {
        return $this->end;
    }

    public function overlapsWith(Range $range): bool
    {
        if ($range->getEnd() <= $this->getStart()) return false;
        if ($range->getStart() >= $this->getEnd()) return false;

        return true;
    }


}

$rangeA = new Range(1, 3);
$rangeB = new Range(3, 6);
$rangeC = new Range(6, 8);
$rangeD = new Range(2, 8);

echo $rangeA->overlapsWith($rangeB) ? 'A overlap with B' : 'A not overlap with B', PHP_EOL;
echo $rangeB->overlapsWith($rangeD) ? 'B overlap with D' : 'B not overlap with D', PHP_EOL;