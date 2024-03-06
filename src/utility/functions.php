<?php

/**
 * This file has a bunch of functions that the program can call.
 */

/**
 *  Calculate the effectiveness of a move under normal circumstances.
 *  @param string $move_type
 *   The type of move being used.
 *  @param string $defender_type1
 *   Type 1 of the defender.
 *  @param string $defender_type2
 *   Type 2 of the defender, NULL if single-type.
 *  @param int $generation
 *   The integer value of the Pokemon generation (e.g. 1, 3, 4 for RBY, RSE, DPP).
 * 
 *  @return int
 *   The effective value.
 */
function calculate_effectiveness($move_type, $defender_type1, $defender_type2, $generation) {
    include('./data/lookup.php');
    
    // Sanity checks
    // Check if the generation exists in the array yet.
    if (!in_array($generation, $effectiveness_by_gen))
    
    
    $effectiveness = 1;

    // Calculate damage for the move against defender_type1
    $effectiveness = $effectiveness * $effectiveness_by_gen[$generation][$move_type][$defender_type1];
    
    if ($defender_type2) {
        $effectiveness = $effectiveness * $effectiveness_by_gen[$generation][$move_type][$defender_type2];
    }

    return $effectiveness;
}

echo calculate_effectiveness('Flying','Bug', 'Grass', 1) . "\n";