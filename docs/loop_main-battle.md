# Loop: Main Battle
This document describes the main battle loop, which follows the Battle Initialization step.

At this stage, the parties of both competitors have been assembled and validated.

Battle Lead-in (events that only fire at the very beginning of a match)
 - Send out first Pokémon from each team
 - Determine if there are any abilities that activate, e.g. weather.

Main Turn-based game loop
 - Competitors choose their action
   - Choose a move (or simply choose to attack if a multiturn attack is already taking place, e.g. Rollout)
     - Only allow moves that are not disabled (perform check)
   - Choose an item to use
   - Choose a different Pokémon to send out
 - Determine which action goes first based on priority
 - If both attacking, determine which who goes first